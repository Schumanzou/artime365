<?php
class Api extends MY_Controller{
	

	// 存储音频地址
	function save(){
        $audioUrl = $this->input->post('record');
        if (trim($audioUrl) == ''){
            $audioUrl = 'http://www.artime365.com';
            //$this->json(array(), -1, '数据不合法');
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
        $data = array(
            'count_id' => $ranking,
            'url' => $audioUrl
        );

        $this->db->insert('tbl_audio', $data);
        $this->json(array('ranking'=>$ranking));
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