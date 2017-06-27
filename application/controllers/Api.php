<?php
ini_set('date.timezone','Asia/Shanghai');
class Api extends MY_Controller{

    public $md5Key = '!QAZ2wsx';
    public $baseUrl = 'http://book.btv.com.cn';

	// 存储音频地址
	function save(){
        $audioUrl = $this->input->post('record');
        $sogou = $this->input->post('sogou');
        if (trim($audioUrl) == ''){
            $this->json(array(), -1, '数据不合法');
        }
        $type = 1;
        if (trim($sogou) == '1'){
            $type = 2;
        }

		$this->load->database();

        $this->db->select('id');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_audio', 1, 0);
        $newId = 0;
        foreach ($query->result() as $row)
        {
            $newId = $row->id;
            break;
        }

        $ranking = $newId + 1000;
        $file_name       = time().rand(100, 999).".png";
        $code_url = "/uploads/small/".date('Ym').'/'.$file_name;
        $rankingMd5 = md5($code_url.$this->md5Key);
        $html5_url = $this->baseUrl."/api/detail/".$rankingMd5;
        $short_url = $this->shorturl($html5_url);
        $data = array(
            'count_id' => $ranking,
            'url' => $audioUrl,
            'code_url' => $code_url,
            'count_id_md5' => $rankingMd5,
            'type' => $type,
            'shorturl' => $short_url,
        );

        $this->db->insert('tbl_audio', $data);

        // 返回二维码
        // <img src="http://qr.topscan.com/api.php?bg=f3f3f3&fg=ff0000&gc=222222&el=l&w=200&m=10&text=http://www.topscan.com"/>
        $content = file_get_contents("http://qr.topscan.com/api.php?w=200&m=10&text=".$short_url);

        $upload_path      = './uploads/small/'.date('Ym').'/';
        if (!file_exists($upload_path)) {
            mkdir($upload_path);
        }
        $pic_path = $upload_path.$file_name;
        $img_write_fd = fopen($pic_path, "w");
        fwrite($img_write_fd, $content);
        fclose($img_write_fd);

        if ($type == 2){
            $this->json(array('ranking'=>$ranking,
                            'sogou'=>'1',
                            "url"=>$short_url,
                            "pv_url"=>$this->baseUrl."/api/pv/".$rankingMd5
            ));
        }

        $this->json(array('ranking'=>$ranking,
                           "url"=>"http://".$_SERVER['HTTP_HOST'].$code_url,
                           "pv_url"=>$this->baseUrl."/api/pv/".$rankingMd5,
        ));
	}

    /**
     * html5页面
     * @param $id
     */
	function detail($id){
        if (!$id){
            $this->json(array(), -1, '不合法的请求');
        }
        $this->load->database();
        $query = $this->db->get_where('tbl_audio', array('count_id_md5' => $id), 1, 0);
        $row = $query->row();

        // 更新访问量
        $this->db->set('pv', 'pv+1', FALSE);
        $this->db->where('count_id_md5', $id);
        $this->db->update('tbl_audio');

        $this->load->vars("row", $row);
        if ($row->type == '2'){
            $this->load->view('api/detail_sogou');
        }else {
            $this->load->view('api/detail');
        }
    }

    /**
     * 生成短域名
     */
    private function shorturl($url){
        // 生成短域名
        $this->load->library('curl');
        $jsonData = $this->curl->simple_get('http://api.t.sina.com.cn/short_url/shorten.json?source=3271760578&url_long='.$url);
        $res = json_decode($jsonData, true);
        if (isset($res[0]) && isset($res[0]['url_short'])){
            return $res[0]['url_short'];
        }
        return $url;
    }

    /**
     * 查询访问量接口
     * @param $id
     */
    function pv($id){
        if (!$id){
            $this->json(array(), -1, '不合法的请求');
        }
        $this->load->database();
        $query = $this->db->get_where('tbl_audio', array('count_id_md5' => $id), 1, 0);
        $row = $query->row();

        $this->json(array('pv'=>$row->pv));
    }


    /**
     * html5页面
     * @param $id
     */
    function code($id){
        if (!$id){
            $this->json(array(), -1, '不合法的请求');
        }
        $this->load->database();
        $query = $this->db->get_where('tbl_audio', array('count_id_md5' => $id), 1, 0);
        $row = $query->row();
        $this->load->vars("row", $row);
        $this->load->vars("host", 'http://'.$_SERVER['HTTP_HOST']);
        $this->load->view('api/code');
    }


    // 返回json数据
    function json($data = array(), $result = 'ok', $message = '', $other_data = array()){
        $result = array('result'=>''.$result, 'message'=>$message, 'data'=>$data);
        if ($other_data){
            $result['other_data'] = $other_data;
        }
        echo json_encode($result);
        exit;
    }


}