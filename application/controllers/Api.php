<?php
class Api extends MY_Controller{
	

	// 存储音频地址
	function save(){

		$this->load->database();

		//返回多条记录
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


}