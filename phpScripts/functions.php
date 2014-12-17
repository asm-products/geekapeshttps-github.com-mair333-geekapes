<?php

	include_once("/var/www/phpScripts/db_connection.php");

	function sanitize($db_con, $data){

		return mysqli_real_escape_string($db_con, $data);

	}

	function get_userid($email, $db_con){

		$email = sanitize($db_con, $email);

		$sql = ("SELECT `user_id` FROM `users` WHERE email = '$email'");
		$result = mysqli_query($db_con, $sql);

		$row = mysqli_fetch_assoc($result);

		$uid = $row["user_id"];
		
		return $uid;
	
	}
	function login($email, $password, $db_con){

		$password = md5($password);

		$user_id = get_userid($email, $db_con);

		$sql = ("SELECT COUNT(`user_id`) FROM `users` WHERE email='$email' AND password = '$password'" );

		global $sql_result;
		$sql_result = mysqli_query($db_con, $sql);

			if(mysqli_num_rows($sql_result) == 1){

				return $user_id;
			}else{

				return false;
			}

			

	}
	
	function register($name, $username, $email, $passwd, $db_con){

		$passwd = md5($passwd);

		
		$query = ("INSERT INTO users (`user_id`, `Name`, `username`, `email`, `password`) VALUES ('', '$name', '$username', '$email', '$passwd')");
		
		 $result =  mysqli_query($db_con, $query);

			
			global $user_id;
			$user_id = mysqli_insert_id($db_con);
			

			if($result = false){
			
				echo ' Error'; 
			}else{
			
				echo '  Success ';
				if (!file_exists("user/$username")) {
							mkdir("user/$username", 0755);
						}	
				
			}

			return $user_id;
	}

	function logged_in(){

	
		if(isset($_SESSION['user_id']))
			return true;

		else
			return false;
	
	}
	

	function error_output($errors){

			return '<ul><li>' . implode('</li><li>', $errors ). '</li></ul>';
		
	}

	
	
?>
	
