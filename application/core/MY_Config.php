<?php
class MY_Config extends CI_Config{
	
	function __construct()
	{
		parent::__construct();
		$base_url = $this->item('base_url');
		$base_url = str_replace($_SERVER["SERVER_ADDR"], $_SERVER["SERVER_NAME"], $base_url);
		$this->set_item('base_url', $base_url);
	}
	
}