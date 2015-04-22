<?php

// ===================
//  php connect MySQL 
// ===================
	// database setting
	$db_host = '127.0.0.1';
	$db_name = 'rakuda_yuchiang';
	$db_user = 'root';
	$db_passwd = '';

	// Connecting database
	$link = mysql_connect('db_host', 'db_user', 'db_passwd')
    if(!$link){
    	die('Could not connect: ' . mysql_error());
    }else{
		echo 'Connected successfully';
    }

	//Connecting database by UTF8
	mysql_query("SET NAMES utf8");

	// Selecting database
	$db_selected = mysql_select_db($db_name, $link);
	if(!$db_selected){
		die('Could not select database' . mysql_error());
	}


?>
	
