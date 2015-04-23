<?php

// ===================
//  php connect MySQL 
// ===================
	// database setting
	$db_host = 'http://coder.tw/phpmyadmin';
	$db_name = 'rakuda_yuchiang';
	$db_user = 'rakuda';
	$db_passwd = 'QzcE2BXsyp6nU3MD';

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
	
