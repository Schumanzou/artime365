<?php
/*$config = array(
    array(
        'field' => 'name',
        'label' => '用户名',
        'rules' => 'required'
    ),
    array(
        'field' => 'email',
        'label' => '邮箱',
        'rules' => 'valid_email'
    ),
);*/

$config = array(
    'register' => array(
	        array(
	        'field' => 'name',
	        'label' => '用户名',
	        'rules' => 'required'
	    ),
	    array(
	        'field' => 'email',
	        'label' => '邮箱',
	        'rules' => 'valid_email'
	    ),
    ),
);