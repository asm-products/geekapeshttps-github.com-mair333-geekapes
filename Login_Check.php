<?php
	
	include_once("/var/www/phpScripts/db_connection.php");
	include_once("/var/www/phpScripts/functions.php");
	
	$header_php = "/var/www/includes/header.php";
	
	if(logged_in()=== true){

	header('Location:http://www.geekapes.com/profile.php');
	exit();
	}

	
	
	
?>

<!Doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>GeeKApes</title>
	<link href="http://54.173.93.109/css/main.css" rel="stylesheet" type="text/css"/>
	<link href="http://54.173.93.109/css/index.css" rel="stylesheet" type="text/css"/>

	
</head>
<body>
	
	<p> Access Denied, you must login before. Click here <a href="login.php"> Login </a> to login.</p>
	


</body>




</html>

