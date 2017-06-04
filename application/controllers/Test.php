<?php
class Test extends MY_Controller{
	
	function abc(){
		$a = 'I am test.';
		$b = & $a;
		unset($b);
		echo $a;
		
		exit;
		$a = 3;
		$b = &$a;
		$b = 5;
		echo $a;
		
		
		exit;
		// 不用第三方变量交换两个值
		$a = 2;$b = 4;
		$a = $a^$b;    //a=0110^b=1100;
		$b = $a^$b;    //a=0110^b=1010;
		$a = $a^$b;    //a=1100=12;b=1010;
		echo $a.'---'.$b."<br/>";
		
		$a = 10;$b = 12;
		$a = $b-$a;   //a=2;b=12
		$b = $b-$a;   //a=2;b=10
		$a = $b+$a;   //a=12;b=10
		echo $a.'---'.$b;
		
		
		exit;
		echo phpinfo();
	}
	
	function redis(){
		// 实例化
		$redis = new Redis();
		// 连接服务器
		$a = $redis->connect("localhost", 6379);
		// 授权
		$redis->auth("jhsoft");

		// ##########################添加#########################################
		// 记录存储新闻id的string类型的key
		$newsid = $redis->incr("newsid");
		echo $newsid;
	}
	
	// mongodb查询，最后都要$conn->close();
	function mongo(){
		// 连接
		$conn = new MongoClient("mongodb://user1:123456@localhost:27017/test");
		// 选择库
		$db = $conn->test;
		$c1 = $db->c1;
		// mongodb里的   db.c1.find({name:"user1"});
		// {name:"user1"} == array("name"=>"user1"); mongodb里的json相当于php里的关联数组
		// [1,2] == array(1,2);  mongodb里的数组相当于php里的索引数组
		$arr = array();
		//$arr = array("name"=>"user1");
		$rst = $c1->find($arr);
		// 下面是带分页和排序的
		//$rst = $c1->find($arr)->sort(array("age"=>1))->skip(0)->limit(20);
		// 下面是带in的
		//$rst = $c1->find(array('age'=>array('$in'=>array(26,46))));
		// 下面是带or的  db.c1.find({$or:[{name:"user102"}, {age:"26"}]);
		//$rst = $c1->find(array('$or'=>array(array('name'=>'user102'), array('age'=>26))));
		// 下面是带or的  db.c1.find({$or:[{name:"user102"}, {age:{$gte:26}}]); 大于26
		//$rst = $c1->find(array('$or'=>array(array('name'=>'user102'), array('age'=>array('$gte'=>26)))));
		foreach($rst as $var){
			//echo "<pre>";
			echo $var["name"]."&nbsp;&nbsp;";
			echo $var["age"]."&nbsp;&nbsp;";
			//echo $var["_id"];  // $var["_id"]是id对象，但是echo会只输出字符串，因为有mongo类里默认有tostring()
			//print_r($var["_id"]); // 这个打印出来的是对象
			//echo "</pre>";
			echo "<a href='/test/mongodetail/".$var['_id']."' target='_blank'>详情</a>&nbsp;&nbsp;";
			echo "<a href='/test/mongoupdate/".$var['_id']."'>修改</a>&nbsp;&nbsp;";
			echo "<a href='/test/mongodelete/".$var['_id']."'>删除</a>";
			echo "<hr/>";
		}
		echo "<a href='/test/mongoinsert'>插入</a><hr/>";
		$conn->close();
	}
	
	// 详情
	function mongodetail($fid){
		// 根据id字符串，转为mongo的id对象
		// 正则也是，不能是字符串，得先生成正则对象
		$oid = new MongoId($fid);
		$arr = array("_id"=>$oid);
		
		$c1 = $this->getMongoConn();
		$rst = $c1->find($arr);
		foreach($rst as $val){
			echo "<pre>";
			print_r($val);
			echo "</pre>";
		}
	}
	
	// 添加
	function mongoinsert(){
		$c1 = $this->getMongoConn();
		// mongodb里的 db.c1.insert({name:"user2", age:25, sex:"nan"});
		$rand = rand(100,200);
		$age = rand(20,60);
		$arr = array("name"=>"user".$rand, "age"=>$age, "sex"=>"nan");
		$rst = $c1->insert($arr);
		if ($rst['ok'] == '1'){
			echo "<script>alert('插入成功!');self.location='/test/mongo';</script>";
		}
		else{
			echo "<script>alert('插入失败!');self.location='/test/mongo';</script>";
		}
		exit;
	}
	
	// 修改
	function mongoupdate($fid){
		$c1 = $this->getMongoConn();
		// mongodb里的 db.c1.update({}, {$set:{age:100, sex:"nv"}}, 0, 1);
		$oid = new MongoId($fid);
		// update 条件
		$search_arr = array("_id"=>$oid);
		// update 内容
		$update_arr = array('$set'=>array('age'=>100, 'sex'=>'nv'));
		// 对应最后两个参数
		$opts = array('upsert'=>0, 'multiple'=>1);
		
		$rst = $c1->update($search_arr, $update_arr, $opts);
		
		if ($rst['ok'] == '1'){
			echo "<script>alert('修改成功!');self.location='/test/mongo';</script>";
		}
		else{
			echo "<script>alert('修改成功!');self.location='/test/mongo';</script>";
		}
		exit;
	}
	
	// 删除
	function mongodelete($fid){
		// 根据id字符串，转为mongo的id对象
		// 正则也是，不能是字符串，得先生成正则对象
		$oid = new MongoId($fid);
		$arr = array("_id"=>$oid);
		
		$c1 = $this->getMongoConn();
		$rst = $c1->remove($arr);
		if ($rst['ok'] == '1'){
			echo "<script>alert('删除成功!');self.location='/test/mongo';</script>";
		}
		else{
			echo "<script>alert('删除失败!');self.location='/test/mongo';</script>";
		}
	}
	
	// mongodb连接
	function getMongoConn(){
		// 连接
		$conn = new MongoClient("mongodb://user1:123456@localhost:27017/test");
		// 选择库
		$db = $conn->test;
		$c1 = $db->c1;
		return $c1;
	}
	
	function sphinx(){
		
		
		$str = "linux1";

		$sphinx = new SphinxClient();
		$sphinx->SetServer("localhost", 9312);
		// 设置按关键词分词来匹配,即匹配关键词里的所有分词的结果,还有SPH_MATCH_ALL全字匹配
		$sphinx->SetMatchMode(SPH_MATCH_ANY);
		// 在哪个索引里搜索，如果不限制索引的话，用*号代替，查所有索引
		$sphinx_result = $sphinx->query($str, "*");
		// 结果数组里total是搜索到了多少个
		// matches里的子数组的key就是搜索到的id
		$ids = join(',', array_keys($sphinx_result["matches"]));
		// $sphinx->buildExcerpts(数据数组,索引,关键词,高亮样式数组)   // 高亮显示

		// 连接mysql查询数据库...
		$link = mysql_connect("localhost", "root", "123456");
		mysql_select_db("d1", $link);
		mysql_query("set names utf8");	// 在linux里mysql插入的中文,需要这样设置
		$result = mysql_query("select * from t3 where id in ($ids)");
		// 定义高亮显示的样式...
		$opts = array("before_match"=>"<span style='color:red'><b>",
					  "after_match"=>"</b></span>",
		);
		while($data = mysql_fetch_assoc($result)){
			//echo "<br/>标题：{$data['title']}<br/>";
			//echo "内容：{$data['content']}<br/><hr/>";
			$data_new = $sphinx->buildExcerpts($data, "main", $str, $opts);
			echo "<br/>标题：{$data_new[1]}<br/>";
			echo "内容：{$data_new[2]}<br/><hr/>";
		}

		echo "<br/>共搜索到<b><span style='color:red'>{$sphinx_result['total']}</span></b>条数据";
		
	}
	
	function index($id){
		echo $id;
		echo "user_index";
		print_r($this->input->server);
		$arr = array("a"=>1, "b"=>2);
		$this->load->vars($arr);
		$this->load->view("test/usin");
	}
	
	
	

	public function showusers(){
		
		$this->load->model("User_model", "t1");
		$d = $this->t1->getAll();
		print_r($d);
		
		$this->load->view("test/usin", array(
			'viewLists'=>$d,
		));
		return;
		
		//$this->load->database();
		$res = $this->db->query("select * from t1");
		$resu = $res->result_array();
		$resut = $res->row();
		print_r($resut);
		
		
		// AR 方式
		$res = $this->db->get("t1");
		$resu = $res->result_array();
		print_r($resu);
		
		//$this->db->insert("t1", array("id"=>null, "username"=>'cycy2'));
		//$this->db->update("t1", array("username"=>'cycy2'), array("id"=>1));
		//$this->db->delete("t1", array("id"=>4));
		
		$res=$this->db->select('id')
		->from('t1')
		->where('id >=',3)
		->limit(3,2)//跳过2条，取出3条数据
		->order_by('id desc ')
		->get();
		print_r($res->result_array());
		
		$res = $this->db->where(array("id >= "=>10))->get('t1');
		print_r($res->result_array());
		echo $this->db->last_query();
		
		exit;
		
		// 预编译的插入...
		$data[] = null;
		$data[] = "hello";
		$sql = "insert into t1 values(?, ?)";
		$bool = $this->db->query($sql, $data);
		if ($bool){
			//echo $this->db->affected_row();
			echo "最新id:".$this->db->insert_id();
		}
		exit;
		
		
		$pdo = new PDO("mysql:host=localhost;dbname=d1", "root", "123456");
		$stmt = $pdo->prepare("select * from t1 where id>:id");
		$stmt->execute(array(":id"=>1));
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		while($row=$stmt->fetch()){
			print_r($row);
		}
		$datas = $stmt->fetchAll();
		print_r($datas);
		echo "总记录".$stmt->rowCount()."<br/>";
		
		$mysql = mysql_connect("localhost", "root", "123456");
		mysql_select_db("d1");
		$results = mysql_query("select * from t1");
		while($row = mysql_fetch_assoc($results)){
			echo $row["id"]."<br/>";
		}
		
		$mysqli = new mysqli("localhost", "root", "123456", "d1");
		$results = $mysqli->query("select * from t1");
		while($row = $results->fetch_assoc()){
			echo $row["id"]."-".$row["username"]."<br>";
		}
	}
	
	
	// 分页
	function page(){
		
		$this->load->model("User_model", "t1");
		$data["viewLists"] = $this->t1->getAll();
		
		$this->load->library('pagination');

		$config['base_url'] = base_url() . "/test/page/sd/";
		$config['total_rows'] = 200;
		$config['per_page'] = 20;
		$config['first_link'] = '首页';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$config['last_link'] = '尾页';
		$config['uri_segment'] = '4';
		echo $this->uri->segment(4);

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();
		
		$this->load->view("test/page", $data);

		
	}
	
	// 文件上传
	function fileupload(){
		echo uniqid();
		$this->load->view('test/fileupload', array('error'=>''));

		
	}
	
	

    public function do_upload()
    {
		
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 10000000;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;
        $config['file_name']       = time().rand(100, 999);

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('test/fileupload', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('test/upload_success', $data);
        }
    }
	
	function yzm(){
		$this->load->helper('captcha');
		$vals = array(
			'img_path'  => './captcha/',
			'img_url'   => base_url() . 'captcha/',
			'img_width' => '150',
			'img_height'    => 30,
			'expiration'    => 5, // 过期时间 
			
		);

		$cap = create_captcha($vals);
		// 图片,包含 <img 标签
		echo $cap['image'];
		// 验证码内容
		$yzm_num = $cap["word"];
		
		session_start();
		$_SESSION["yzm"] = $yzm_num;
	}
	
	
	function insert(){
		
		echo dirname(__FILE__);
		echo basename((dirname(__FILE__).'/../index.html'));
		
		$this->load->library('form_validation');

		$bool=$this->form_validation->run("register");
		
		if($bool){
			//调用模型保存到数据库
		
		}else{
			//显示错误信息
			$this->load->view('test/formyz');
			
		}
		
	}
	
}