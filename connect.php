<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
	// ============================
	// ID, PW confirm with database
	// ============================

	//if this page has to "connect" to database, we have to "include" it
	include("mysql_connect.inc.php");
	$id = $_POST['id'];
	$pw = $_POST['pw'];

	//Selecting data from database.
	$sql = "SELECT * FROM `login` where `usr` = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);

	//Determine if this is a legal ID
	if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
	{
	        //write account into session for vertify
	        $_SESSION['usr'] = $id;
	        echo 'Login successfully!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
	}
	else
	{
	        echo 'Login failed! Please try again.';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
?>