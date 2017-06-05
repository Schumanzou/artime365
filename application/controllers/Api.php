<?php
class Api extends MY_Controller{
	

	// 存储音频地址
	function save(){
        $audioUrl = $this->input->post('record');
        if (trim($audioUrl) == ''){
            //$this->json(array(), -1, '数据不合法');
        }

		$this->load->database();

        $this->db->select('id');
        $query = $this->db->get('tbl_audio', 1, 0);
        $this->db->order_by('id', 'DESC');
        foreach ($query->result() as $row)
        {
            echo $row->id;
        }

        /*$data = array(
            'count_id' => '`id`+1000',
            'name' => 'My Name',
            'date' => 'My date'
        );

        $this->db->insert('tbl_audio', $data);

        $data = array(
            'count_id' => '`id`+1000',
            'name' => 'My Name',
            'date' => 'My date'
        );

        $this->db->insert('tbl_audio', $data);*/
        // 添加
        $query = $this->db->query('select * from tbl_audio');
        if($query->num_rows()>0){
            foreach($query->result() as $row){
                echo "<br/>";
                echo $row->userid;
                echo $row->url;
                echo $row->created;
            }
        }

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