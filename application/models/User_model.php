<?php
class User_model extends CI_Model{
	
	function getAll(){
		$res = $this->db->get("t1");
		return $res->result_array();
	}
} 