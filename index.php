<?php
session_start();  
require 'config.php';

function __autoload($class){
	if(file_exists('system/core/'.$class.'.php')) {
		require 'system/core/'.$class.'.php';
	}
	if(file_exists('system/database/'.$class.'.php')) {
		require 'system/database/'.$class.'.php';
	}
	if(file_exists('system/lib/'.$class.'.php')) {
		require 'system/lib/'.$class.'.php';
	}
}

	$core = new Bootstrap();
	$core->init();

// require "user/models/category_model.php";
// $cat = new Category_Model();
// $str = "<p style='color: #07c;'>paragraph</p>";
// $str = htmlentities($str);
// $arg = array(
// 	"category_name" => "html",
// 	"description" => $str,
// 	"date_add" => date("Y-m-d h:i:s"),
// 	"date_modified" => date("Y-m-d h:i:s")
// 	);

// $cat->insert_category($arg);

// $data = $cat->get_all_category("SELECT * FROM category ORDER BY date_modified DESC");
// $list = "";
// if (isset($data) && !empty($data) && $data != null ){
// 	foreach ($data as $row) {
// 		$list .=  "".html_entity_decode($row["description"])."";
// 	}

// }
// echo $list;
?>