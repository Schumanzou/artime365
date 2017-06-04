<?php
class Api2 extends MY_Controller{
	
	public $conn;
	public $key = '!@#$%%^^qwesewiolkdmmdddd';
	public $config_big_thumb = array(  
						'image_library' => 'gd2',//gd2图库  
						//'source_image' => $data['full_path'],//原图  
						//'new_image' => "./upload/big_thumb/".date("Y/m/d")."/".$data['file_name'],//大缩略图  
						'create_thumb' => true,//是否创建缩略图  
						'maintain_ratio' => true,  
						'width' => 300,//缩略图宽度  
						'height' => 300,//缩略图的高度  
						'thumb_marker'=>'',
						//'thumb_marker'=>"_300_300"//缩略图名字后加上 "_300_300",可以代表是一个300*300的缩略图  
					); 
	public $config_small_thumb = array(  
						'image_library' => 'gd2',//gd2图库  
						'create_thumb' => true,//是否创建缩略图  
						'maintain_ratio' => true,  
						'width' => 100,//缩略图宽度  
						'height' => 100,//缩略图的高度 
						'thumb_marker'=>'',
					); 
	/////     初始化用户
	/////     http://xxx/api/inituser/1
	
	// 登录
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if (trim($username) == '' || trim($password) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		// 连接数据库
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$arr = array('username'=>$username,
					  'password'=>md5($password . $this->key),
		);
		$rst = $c1->find($arr)->count();
		if($rst == 0){
			$arr = array('mobile'=>$username,
						  'password'=>md5($password . $this->key),
			);
			$rst = $c1->find($arr)->count();
		}
		if ($rst == 0){
			$this->json(array(), -1, '用户名密码错误');
		}
		
		$rst = $c1->find($arr);
		$result_data = array();
		foreach($rst as $var){
			$var['tokenId'] = $this->get_tokenid($var['userId']);
			unset($var['_id']);
			unset($var['password']);
			unset($var['time']);
			$result_data = $var;
		}
		$this->closeMongoConn();
		$this->json($result_data);
	}
	
	
	// 广告
	function ad(){
		$result_data = array();
		$result_data['id'] = 1;
		$result_data['name'] = 'ad';
		$result_data['imageurl'] = 'ad.jpg';
		$result_data['linkurl'] = 'http://www.yongche.com';
		$this->json($result_data);
	}
	
	// 添加用户
	function useradd(){
		$relname = $this->input->post('relname');
		$mobile = $this->input->post('mobile');
		$username = $this->input->post('username');
		$icon = $this->input->post('icon');
		$tokenId = $this->input->post('tokenId');
		$password = md5("123".$this->key);
		if (trim($username) == '' || trim($relname) == '' || trim($tokenId) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		// 根据tokenId找到uid,再找到appId
		$appId = $this->get_App_Id($tokenId);
		$userId = $this->getUID();
		if (!$appId || !$userId){
			$this->json(array(), -3, '数据不合法');
		}
		
		// 手机号和用户名是否已存在...
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$sarr = array('username'=>$username);
		$count = $c1->find($sarr)->count();
		if ($count > 0){
			$this->json(array(), -3, '用户名已存在,请更换');
		}
		$sarr = array('mobile'=>$mobile);
		$count = $c1->find($sarr)->count();
		if ($count > 0){
			$this->json(array(), -4, '手机号已存在,请更换');
		}
		
		// 上传头像
		/*$config['upload_path']      = './uploads/origin';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 10000000;
        $config['max_width']        = 5000;
        $config['max_height']       = 5000;
        $config['file_name']       = time().rand(100, 999);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
			// 失败
			$this->json(array(), '-1', $this->upload->display_errors());
        }
		$upload_data = $this->upload->data();
		
		// 生成缩略图
		$this->load->library("image_lib");//载入图像处理类库  
		// 生成大缩略图
		$config_big_thumb = $this->config_big_thumb;  
		$config_big_thumb['source_image'] = $upload_data['full_path'];  
        $config_big_thumb['new_image'] = "./uploads/big/".$upload_data['file_name']; 
		$this->image_lib->initialize($config_big_thumb);  
		$this->image_lib->resize();//生成big缩略图  
		// 生成小缩略图
		$config_small_thumb = $this->config_small_thumb;  
		$config_small_thumb['source_image'] = $upload_data['full_path'];  
        $config_small_thumb['new_image']= "./uploads/small/".$upload_data['file_name']; 
		$this->image_lib->initialize($config_small_thumb);  
		$this->image_lib->resize();//生成small缩略图  
		*/
		$upload_data['file_name'] = isset($upload_data['file_name']) ? $upload_data['file_name'] : 'likai.jpg';
		
		// -------------------------提交数据------------------
		// 提交数据到数据库中
		$arr = array('username'=>$username,
					  'relname'=>$relname,
					  'mobile'=>$mobile,
					  'icon'=>$upload_data['file_name'],
					  'appId'=>$appId,
					  'password'=>$password,
					  'time'=>time(),
					  'userId'=>$userId
		);
		$rst = $c1->insert($arr);
		if ($rst['ok'] != '1'){
			// 失败
			$this->closeMongoConn();
			$this->json(array(), '-1', '操作失败请重试');
		}
		
		$this->closeMongoConn();
		unset($arr['password']);
		unset($arr['time']);
		unset($arr['_id']);
		$arr['userId'] = ''.$arr['userId'];
		$result_data[] = $arr;
		$this->json($result_data);
	}
	
	// 修改用户
	function useredit(){
		$relname = $this->input->post('relname');
		$mobile = $this->input->post('mobile');
		$username = $this->input->post('username');
		$icon = $this->input->post('icon');
		$userId = $this->input->post('userId');
		$tokenId = $this->input->post('tokenId');
		
		if (trim($username) == '' || trim($relname) == '' || trim($tokenId) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		// 根据tokenId找到uid,再找到appId
		$appId = $this->get_App_Id($tokenId);
		if (!$appId){
			$this->json(array(), -3, '数据不合法');
		}
		
		// 手机号和用户名是否已存在...
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$sarr = array('username'=>$username, 'userId'=>array('$ne'=>intval($userId)));
		$count = $c1->find($sarr)->count();
		if ($count > 0){
			$this->json(array(), -3, '用户名已存在,请更换');
		}
		$sarr = array('mobile'=>$mobile, 'userId'=>array('$ne'=>intval($userId)));
		$count = $c1->find($sarr)->count();
		if ($count > 0){
			$this->json(array(), -4, '手机号已存在,请更换');
		}
		
		// -------------------------提交数据------------------
		// 提交数据到数据库中
		$arr = array('username'=>$username,
					  'relname'=>$relname,
					  'mobile'=>$mobile,
					  'icon'=>$icon,
		);
		$update_arr = array('$set'=>$arr);
		// update 条件
		$search_arr = array("userId"=>intval($userId));
		// 对应最后两个参数
		$opts = array('upsert'=>0, 'multiple'=>0);
		// 更新
		$rst = $c1->update($search_arr, $update_arr, $opts);
		
		if ($rst['ok'] != '1'){
			// 失败
			$this->closeMongoConn();
			$this->json(array(), '-1', '操作失败请重试');
		}
		
		$this->closeMongoConn();
		$result_data[] = $this->get_user_info($userId);
		$this->json($result_data);
	}
	
	// 删除用户
	function userdel(){
		$delUserId = $this->input->post('delUserId');
		$tokenId = $this->input->post('tokenId');
		
		if (trim($delUserId) == '' || trim($tokenId) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		// 根据tokenId找到uid,再找到appId
		$appId = $this->get_App_Id($tokenId);
		$userId = $this->get_uid_by_tokenId($tokenId);
		if (intval($appId) != intval($userId)){
			$this->json(array(), -3, '无权限操作');
		}
		
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$arr = array("userId"=>intval($delUserId));
		$rst = $c1->remove($arr);
		if ($rst['ok'] != '1'){
			// 失败
			$this->closeMongoConn();
			$this->json(array(), '-1', '操作失败请重试');
		}
		$this->closeMongoConn();
		$this->json(array());
	}
	
	
	// 获取用户列表...
	function get_user_list($tokenId){
		
		if (!$tokenId){
			$this->json(array(), -1, '不合法的请求');
		}
		$appId = $this->get_App_Id($tokenId);
		if (!$appId){
			$this->json(array(), -2, '不合法的请求');
		}
		
		// 选择库
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$arr = array('appId'=>$appId);
		$rst = $c1->find($arr)->sort(array("userId"=>1));
		$result_data = array();
		foreach($rst as $var){
			unset($var['_id']);
			unset($var['password']);
			unset($var['time']);
			$result_data[] = $var;
		}
		
		$this->closeMongoConn();
		$this->json($result_data);
	}
	
	
	// 获取用户列表...
	function get_colum_list($tokenId){
		
		if (!$tokenId){
			$this->json(array(), -1, '不合法的请求');
		}
		$appId = $this->get_App_Id($tokenId);
		if (!$appId){
			$this->json(array(), -2, '不合法的请求');
		}
		
		// 选择库
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$arr = array('appId'=>$appId);
		$rst = $c1->find($arr)->sort(array("userId"=>1));
		$result_data = array();
		$data = array();
		foreach($rst as $var){
			unset($var['_id']);
			unset($var['password']);
			unset($var['time']);
			$data['id'] = $var['userId'];
			$data['name'] = $var['relname'];
			$result_data[] = $data;
		}
		
		$this->closeMongoConn();
		$this->json($result_data);
	}
	
	// 返回json数据
	function json($data = array(), $result = 'ok', $message = '', $other_data = array()){
		
		$result = array('result'=>''.$result, 'data'=>$data, 'message'=>$message, 'other_data'=>$other_data);
		echo json_encode($result);
		exit;
		
	}
	
	
	// 获取统计结果...
	// mongodb查询，最后都要$conn->close();
	function get_accounting_list($tokenId){
		
		if (!$tokenId){
			$this->json(array(), -1, '不合法的请求');
		}
		$appId = $this->get_App_Id($tokenId);
		if (!$appId){
			$this->json(array(), -2, '不合法的请求');
		}
		
		// 选择库
		$db = $this->getMongoConn();
		$c1 = $db->jhs_accounting;
		$keys = array('userId' => 1);  
		$initial = array('money' => 0);  
		$reduce = 'function (obj, prev) { prev.money = parseFloat(obj.money) + parseFloat(prev.money) }';  
		$condition = array('condition' => array('is_checkout' => 0, 'appId' => $appId));  
		$rst = $c1->group($keys, $initial, $reduce, $condition); 
		$result_data = array();
		
		// 排序
		usort($rst['retval'], function($arr1, $arr2) {
            $v1 = floatval($arr1['money']);
            $v2 = floatval($arr2['money']);
            if ($v1 == $v2)
                return 0;
            return ($v1 > $v2) ? -1 : 1;
        });
		
		foreach($rst['retval'] as $var){
			$userId = $var['userId'];
			unset($var['userId']);
			$data = $var;
			
			// 找用户...
			$data['user'] = $this->get_user_info($userId);
			$result_data[] = $data;
		}
		
		$this->closeMongoConn();
		$this->json($result_data);
	}
	
	
	// 获取帐目详情列表...
	function get_accountdetail_list($tokenId, $userId){
		
		if (!$tokenId || !$userId){
			$this->json(array(), -1, '不合法的请求');
		}
		$appId = $this->get_App_Id($tokenId);
		if (!$appId){
			$this->json(array(), -2, '不合法的请求');
		}
		
		// 选择库
		$db = $this->getMongoConn();
		$c1 = $db->jhs_accounting;
		$offset = 0;
		$pagesize = 100;
		$arr = array('appId'=>$appId, 'userId'=>intval($userId), 'is_checkout'=>0);
		$rst = $c1->find($arr)->sort(array("accountId"=>-1))->skip($offset)->limit($pagesize);
		$result_data = array();
		$data = array();
		foreach($rst as $var){
			unset($var['_id']);
			unset($var['appId']);
			unset($var['accountId']);
			$addUserId = $var['addUserId'];
			unset($var['addUserId']);
			unset($var['userId']);
			
			$data = $var;
			
			// 找用户...
			$data['user'] = $this->get_user_info($addUserId);;
			$result_data[] = $data;
		}
		
		$this->closeMongoConn();
		$this->json($result_data);
	}
	
	
	// 获取帐单列表...
	// id 从哪条数据开始取
	// datatype "new"最新数据  "old"最旧数据
	function get_account_list($tokenId, $offset, $pagesize, $id, $datatype, $userId){
		
		if (!$tokenId){
			$this->json(array(), -1, '不合法的请求');
		}
		$appId = $this->get_App_Id($tokenId);
		if (!$appId){
			$this->json(array(), -2, '不合法的请求');
		}
		
		// 选择库
		$db = $this->getMongoConn();
		$c1 = $db->jhs_account;
		$arr = $next_arr = array('appId'=>$appId);
		
		$userId = intval($userId);
		if ($userId > 0){
			$arr += array('userId'=>$userId);
			$next_arr += $arr;
		}
		
		// 旧的数据
		if ($datatype == 'old' && $id != '-1'){
			$arr += array('accountId'=>array('$lt'=>intval($id)));
		}
		// 新数据
		if ($datatype == 'new' && $id != '-1'){
			$arr += array('accountId'=>array('$gt'=>intval($id)));
		}
		
		$rst = $c1->find($arr)->sort(array("accountId"=>-1))->skip($offset)->limit($pagesize);
		$result_data = array();
		$_lastId = -1;
		$_firstId = -1;
		$_i = 0;
		foreach($rst as $var){
			$data = $this->get_account_info($var['accountId']);
			$result_data[] = $data;
			
			$_lastId = intval($data['accountId']);
			if ($_i == 0){
				$_firstId = intval($data['accountId']);
			}
			$_i ++;
		}
		
		// 看是否还有下一页
		$other_data['has_next_page'] = 1;
		if ($datatype == 'old' && $id != '-1'){
			$next_arr += array('accountId'=>array('$lt'=>intval($id)));
			$sum = $c1->find($next_arr)->count();
			$other_data['has_next_page'] = $sum > $pagesize ? '1' : '0';
		}
		$other_data['firstId'] = $_firstId;
		$other_data['lastId'] = $_lastId;
		
		$this->closeMongoConn();
		$this->json($result_data, 'ok', '', $other_data);
	}
	
	// 添加帐单
	function accountadd(){
		
		$money = $this->input->post('money');
		$uids = $this->input->post('uids');
		$time = $this->input->post('time');
		$remark = $this->input->post('remark');
		$tokenId = $this->input->post('tokenId');
		//$userId = $this->input->post('userId');
		
		if (trim($money) == '' || trim($uids) == '' || trim($time) == '' || trim($tokenId) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		$db = $this->getMongoConn();
		$accountId = $this->getAccountID();
		$appId = $this->get_App_Id($tokenId);
		$userId = intval($this->get_uid_by_tokenId($tokenId));
		if (!$appId || !$accountId){
			$this->json(array(), -3, '数据不合法');
		}
		
		// -------------------------提交数据------------------
		$c1 = $db->jhs_account;
		$arr = array('money'=>$money, 
					 'uids'=>$uids, 
					 'time'=>$time,
					 'remark'=>$remark,
					 'userId'=>$userId,
					 'accountId'=>$accountId,
					 'appId'=>$appId
					);
		$rst = $c1->insert($arr);
		if ($rst['ok'] != '1'){
			// 失败
			$this->closeMongoConn();
			$this->json(array(), '-1', '操作失败请重试');
		}
		
		
		// 添加完帐单，需要往帐单详情集合里添加数据...
		$uidArrs = explode('_', $uids);
		$db_accounting = $db->jhs_accounting;
		$user_money = round($money / count($uidArrs), 2);
		foreach($uidArrs as $_uid){
			$arr = array( 
					 'userId'=>intval($_uid), 
					 'money'=>0 - $user_money,
					 'is_checkout'=>0,
					 'time'=>$time,
					 'accountId'=>$accountId,
					 'appId'=>$appId,
					 'addUserId'=>$userId
			);
			$rst = $db_accounting->insert($arr);
		}
		// 添加自己的进帐
		$arr = array(
				 'userId'=>$userId, 
				 'money'=>$money,
				 'is_checkout'=>0,
				 'time'=>$time,
				 'accountId'=>$accountId,
				 'appId'=>$appId,
				 'addUserId'=>$userId
		);
		$rst = $db_accounting->insert($arr);
		
		$this->closeMongoConn();
		
		// 录入成功,拼装刚才这条数据
		$result_data[] = $this->get_account_info($accountId);
		
		$this->json($result_data);
	}
	
	// 拼装帐单...
	public function get_account_info($accountId){
		$db = $this->getMongoConn();
		$c1 = $db->jhs_account;
		$arr = array('accountId'=>intval($accountId));
		$rst = $c1->find($arr);
		$data = array();
		$uid = 0;
		$uids = '';
		foreach($rst as $var){
			unset($var['_id']);
			$uid = $var['userId'];
			$uids = $var['uids'];
			unset($var['uids']);
			unset($var['userId']);
			$data = $var;
			break;
		}
		
		// 取uid录入人
		$c2 = $db->jhs_user;
		$data['user'] = $this->get_user_info($uid);
		
		// 取用餐人...
		$uidArrs = explode('_', $uids);
		foreach($uidArrs as $_uid){
			$data['users'][] = $this->get_user_info($_uid);
		}
		
		return $data;
	}
	
	// 删除帐单
	function accountdel($tokenId, $accountId){
		//$accountId = $this->input->post('accountId');
		//$tokenId = $this->input->post('tokenId');
		
		if (trim($accountId) == '' || trim($tokenId) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		// 是否有权限操作
		$is_allow_opr = false;
		
		// 根据tokenId找到uid,再找到appId
		// 操作人是系统管理员
		$appId = $this->get_App_Id($tokenId);
		$userId = $this->get_uid_by_tokenId($tokenId);
		if (intval($appId) == intval($userId)){
			$is_allow_opr = true;
		}
		
		$db = $this->getMongoConn();
		$c1 = $db->jhs_account;
		// 判断tokenId的那人是否是这个帐单的主人
		if (!$is_allow_opr){
			$sarr = array('accountId'=>intval($accountId), 'userId'=>intval($userId));
			$count = $c1->find($sarr)->count();
			if ($count > 0){
				$is_allow_opr = true;
			}
		}
		
		// 没权限
		if (!$is_allow_opr){
			$this->json(array(), -3, '无权限操作');
		}
		
		// 删除帐单表...
		$arr = array("accountId"=>intval($accountId));
		$rst = $c1->remove($arr);
		if ($rst['ok'] != '1'){
			// 失败
			$this->closeMongoConn();
			$this->json(array(), '-1', '操作失败请重试');
		}
		
		// 删除帐单明细表...
		$c1 = $db->jhs_accounting;
		$arr = array("accountId"=>intval($accountId));
		$rst = $c1->remove($arr);
		if ($rst['ok'] != '1'){
			// 失败
			$this->closeMongoConn();
			$this->json(array(), '-1', '操作失败请重试');
		}
		
		// 成功
		$this->closeMongoConn();
		$this->json(array(), '1', '删除成功');
	}
	
	// 支付
	function accountpay(){
		$tokenId = $this->input->post('tokenId');
		
		if (trim($tokenId) == '' ){
			$this->json(array(), -2, '数据不合法');
		}
		
		$db = $this->getMongoConn();
		$userId = intval($this->get_uid_by_tokenId($tokenId));
		$appId = $this->get_App_Id($tokenId);
		if (!$appId || !$userId){
			$this->json(array(), -3, '数据不合法');
		}
		
		// -------------------------提交数据------------------
		$c1 = $db->jhs_accounting;
		$search_arr = array('appId'=>$appId, 'userId'=>$userId, 'is_checkout'=>0);
		// update 内容
		$update_arr = array('$set'=>array('is_checkout'=>1));
		// 对应最后两个参数,如果没找到不插入,更新所有找到的数据
		$opts = array('upsert'=>0, 'multiple'=>1);
		$rst = $c1->update($search_arr, $update_arr, $opts);
		$this->closeMongoConn();
		if ($rst['ok'] == '1'){
			// 成功
			$this->json(array());
		}
		else{
			// 失败
			$this->json(array(), '-1', '操作失败请重试');
		}
	}
	
	// 文件上传
	function do_upload(){
		
		$config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 10000000;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;
        $config['file_name']       = time().rand(100, 999);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
			// 成功
			$this->json(array());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('test/upload_success', $data);
			// 失败
			$this->json(array(), '-1', '上传失败请重试');
        }
	}
	
	// 拼装用户信息...
	private function get_user_info($userId){
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$arr = array('userId'=>intval($userId));
		$rst = $c1->find($arr);
		$data = array();
		foreach($rst as $var){
			unset($var['_id']);
			unset($var['password']);
			unset($var['time']);
			$data = $var;
			break;
		}
		
		return $data;
	}
	
	// 根据tokenID取uid
	private function get_uid_by_tokenId($tokenid){
		// 实例化
		$redis = new Redis();
		// 连接服务器
		$a = $redis->connect('localhost', 6379);
		// 授权
		$redis->auth('jhsoft');
		return $redis->get('uid_tokenid_'.$tokenid);
	}
	
	// 根据tokenID取uid
	private function get_tokenid($uid){
		// 实例化
		$redis = new Redis();
		// 连接服务器
		$a = $redis->connect('localhost', 6379);
		// 授权
		$redis->auth('jhsoft');

		// ##########################添加#########################################
		// 记录存储新闻id的string类型的key
		$tokenid = md5(time() . $uid. $this->key);
		$redis->set('uid_tokenid_'.$tokenid, $uid);
		return $tokenid;
	}
	
	// 详情
	function mongodetail($fid){
		// 根据id字符串，转为mongo的id对象
		// 正则也是，不能是字符串，得先生成正则对象
		$oid = new MongoId($fid);
		$arr = array('_id'=>$oid);
		
		$c1 = $this->getMongoConn();
		$rst = $c1->find($arr);
		foreach($rst as $val){
			echo '<pre>';
			print_r($val);
			echo '</pre>';
		}
	}
	
	// mongodb连接
	private function getMongoConn(){
		// 连接
		$this->conn = new MongoClient('mongodb://user1:123456@localhost:27017/test');
		// 选择库
		$db = $this->conn->test;
		return $db;
	}
	
	private function closeMongoConn(){
		$this->conn->close();
	}
	
	// 根据mongodb的_id得到字符串
	private function get_Mongo_Id($var){
		foreach($var['_id'] as $v){
			return $v;
		}
		return '';
	}
	
	// 得到appId
	private function get_App_Id($tokenId){
		$uid = $this->get_uid_by_tokenId($tokenId);
		if (!$uid)	return 0;
		
		//$oid = new MongoId($uid);
		//$arr = array("_id"=>$oid);
		
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		$rst = $c1->find(array('userId'=>intval($uid)));
		$appId = 0;
		foreach($rst as $val){
			$appId = ''.$val['appId'];
		}
		$this->closeMongoConn();
		return $appId;
	}
	
	// 自增长uid
	private function getUID(){
		// 实例化
		$redis = new Redis();
		// 连接服务器
		$a = $redis->connect('localhost', 6379);
		// 授权
		$redis->auth('jhsoft');

		// ##########################添加#########################################
		// 记录存储新闻id的string类型的key
		$uid = $redis->incr('meal_app_uid');
		return $uid;
	}
	
	// 自增长帐单ID
	private function getAccountID(){
		// 实例化
		$redis = new Redis();
		// 连接服务器
		$a = $redis->connect('localhost', 6379);
		// 授权
		$redis->auth('jhsoft');

		// ##########################添加#########################################
		// 记录存储新闻id的string类型的key
		$uid = $redis->incr('meal_app_accountId');
		return $uid;
	}
	
	
	
	// 初始化一个用户
	function inituser(){
		
		$relname = '陈义';
		$mobile = '18610556658';
		$username = 'cy';
		$icon = 'cy.jpg';
		$password = md5("123".$this->key);
		$userId = $this->getUID();
		$appId = ''.$userId;
		
		// -------------------------提交数据------------------
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		
		// 先删除所有数据...
		$arr = array(
			'appId'=>$appId		
		);
		$rst = $c1->remove($arr);
		
		// 提交数据到数据库中
		$arr = array('username'=>$username,
					  'relname'=>$relname,
					  'mobile'=>$mobile,
					  'icon'=>$icon,
					  'appId'=>$appId,
					  'password'=>$password,
					  'time'=>time(),
					  'userId'=>$userId
		);
		$rst = $c1->insert($arr);
		echo '成功';
		exit;
	}
	
	
	
	// 初始化多个用户
	function inituserall($_appId){
		
		if(!$_appId){
			echo "请在url里加上要初始化的appId, 如在url后加上  /1  ";
			exit;
		}
		
		$password = md5("123".$this->key);
		$appId = $_appId;
		
		$relnameArr = array('陈义', '王雷雷', '李凯', '孙东汉', '葛亮', '陈萍宾');
		$mobileArr = array('18610556658', '18610556651', '18610556652', '18610556653', '18610556654', '18610556655');
		$usernameArr = array('cy', 'wll', 'likai', 'sdh', 'gl', 'cpb');
		
		// -------------------------提交数据------------------
		$db = $this->getMongoConn();
		$c1 = $db->jhs_user;
		
		// 先删除所有数据...
		$arr = array(
			'appId'=>$appId		
		);
		$rst = $c1->remove($arr);
		
		for($i = 0; $i<count($mobileArr); $i++){
			// 提交数据到数据库中
			$arr = array('username'=>$usernameArr[$i],
						  'relname'=>$relnameArr[$i],
						  'mobile'=>$mobileArr[$i],
						  'icon'=>$usernameArr[$i].'.jpg',
						  'appId'=>$appId,
						  'password'=>$password,
						  'time'=>time()+$i,
						  'userId'=>$this->getUID()
			);
			$rst = $c1->insert($arr);
		}
		echo '成功';
		exit;
	}
	
	function test(){
		$arr = array('appId'=>1);
		$arr += array('userId'=>2);
		print_r($arr);
	}
	
	// 批量添加帐单
	function initaccount($appId){
		
		
		$money = 100;
		$uids = '2_1';
		$time = '1459785600';
		$remark = '';
		$userId = 1;
		
		$db = $this->getMongoConn();
		
		for ($scount = 0; $scount < 3; $scount ++){
			
			
			$accountId = $this->getAccountID();
			$remark = ''.$accountId;
			if (!$appId || !$accountId){
				$this->json(array(), -3, '数据不合法');
			}
			
			// -------------------------提交数据------------------
			$c1 = $db->jhs_account;
			$arr = array('money'=>$money, 
						 'uids'=>$uids, 
						 'time'=>$time,
						 'remark'=>$remark,
						 'userId'=>$userId,
						 'accountId'=>$accountId,
						 'appId'=>$appId
						);
			$rst = $c1->insert($arr);
			if ($rst['ok'] != '1'){
				// 失败
				$this->closeMongoConn();
				$this->json(array(), '-1', '操作失败请重试');
			}
			
			
			// 添加完帐单，需要往帐单详情集合里添加数据...
			$uidArrs = explode('_', $uids);
			$db_accounting = $db->jhs_accounting;
			$user_money = round($money / count($uidArrs), 2);
			foreach($uidArrs as $_uid){
				$arr = array( 
						 'userId'=>intval($_uid), 
						 'money'=>0 - $user_money,
						 'is_checkout'=>0,
						 'time'=>$time,
						 'accountId'=>$accountId,
						 'appId'=>$appId,
						 'addUserId'=>$userId
				);
				$rst = $db_accounting->insert($arr);
			}
			// 添加自己的进帐
			$arr = array(
					 'userId'=>$userId, 
					 'money'=>$money,
					 'is_checkout'=>0,
					 'time'=>$time,
					 'accountId'=>$accountId,
					 'appId'=>$appId,
					 'addUserId'=>$userId
			);
			$rst = $db_accounting->insert($arr);
			
		
			// 录入成功,拼装刚才这条数据
			$result_data[] = $this->get_account_info($accountId);
		}
		
		$this->closeMongoConn();
		
		$this->json($result_data);
	}
	
	
	/* 连接mongodb
	 /usr/local/mongodb/bin/mongo localhost:27017/test -uuser1 -p123456
	 show tables;
	 db.jhs_accounting.drop();
	 db.jhs_account.drop();
	 db.jhs_accounting.find();
	
	 连接redis
	 /usr/local/redis/bin/redis-cli
	 keys *  查看所有key
	 get xxx 查看key的值
	*/
}