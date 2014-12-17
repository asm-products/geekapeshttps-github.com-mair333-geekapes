<?php
	
	include_once("/var/www/phpScripts/db_connection.php");
	include_once("/var/www/phpScripts/functions.php");
	
	$header_php = "/var/www/includes/header.php";
	
	if(logged_in()=== true){

	header('Location:http://www.geekapes.com/profile.php');
	exit();
	}
	elseif(logged_in() === false){
			
	
	 if(isset($_POST['email']) && $_POST['passwd']){
	
		
		$email = sanitize($db_con, $_POST['email']);
		$password = $_POST['passwd'];

			if(empty($email) === true || empty($password) === true){

				$errors[] = "Please fill in all the fields";
			}else{
		
				global $log_in;

				$log_in = login($email, $password, $db_con);

			if($log_in== false){

				$errors[] = "Email/password incorrect";
			}else{

				$_SESSION['user_id']  = $log_in;
				header('Location: http://www.geekapes.com/edit_profile.php?$log_in');

			}

		}
		
		}
	
	}
	
?>