<?php
	$db_con = mysqli_connect("localhost","root","Formula230","social");

	if(mysqli_connect_errno()){

		echo "Database Error";

	}

	$errors = array();
	session_start();

?>

