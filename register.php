<?php

	$header_php = "/var/www/includes/header.php";
	$footer = "/var/www/includes/footer.php";
	 
	

	include_once("/var/www/phpScripts/db_connection.php");
	include_once("/var/www/phpScripts/functions.php");
	

	if(logged_in() === true){
			header('Location:http://www.geekapes.com/profile.php');
			exit();
	
	 }


	if(isset($_POST['fname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['passwd'])){
	
		if(empty($_POST['fname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['passwd'])){
			
			$errors[] = 'Please fill out all the fields';
		}
		else if(strlen($_POST['fname']) > 255 || strlen($_POST['email']) > 255 || strlen($_POST['passwd']) > 40 || strlen($_POST['username']) > 32){
		
			$errors[] = 'Password, Name, Username or email too long';
		
		}
			else{
					
				
				$name = sanitize($db_con,$_POST['fname']);
				$username = sanitize($db_con,$_POST['username']);
				$email = sanitize($db_con,$_POST['email']);
				$passwd = $_POST['passwd'];
				
				$sql_username = ("SELECT * from users WHERE `username` = '$username'");
				
				$result_username = mysqli_query($db_con, $sql_username);
				
				$sql_email = ("SELECT * from users WHERE `email` = '$email'");
				
				$result_email = mysqli_query($db_con, $sql_email);
				
				if(mysqli_num_rows($result_username) > 0){
				
					$errors[] = 'Username already taken';
					
					
				}
				
				else if(mysqli_num_rows($result_email) > 0){
				
					$errors[] = 'Email already registered';
				
				}else{
				
				
					$uid = register($name, $username, $email, $passwd, $db_con);

							
				
					$_SESSION['$user_id'] = $uid;

					header('Location:http://www.geekapes.com/edit_profile.php');
					exit();
				
				}
				
	}// if empty
}// if isset

?>


<!Doctype html>
<html>
<head>
	<title>Geekapes</title>
	<meta charset="UTF-8">
	<link href="http://www.geekapes.com/css/main.css" rel="stylesheet" type="text/css"/>
	<link href="http://www.geekapes.com/css/register.css" rel="stylesheet" type="text/css"/>
	
	
	
</head>

<body>
	
	<div id="wrapper_top">
	<?php include ($header_php);?> 
	
	</div>
	
	<div id="wrapper_middle">
	
	<div id="form_color">
	<form class="form" action="" method="POST" id="form_reset">
		<h2>SignUp</h2>
		<?php 

			echo error_output($errors);

		?>
		<fieldset>
		
			<label for="fname"></label>
				<input type="text" name="fname" id="fname" placeholder="Full Name"></input>
			
			<label for="username"></label>
				<input type="text" name="username" id="username" placeholder="UserName"></input>
				
			<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Email"></input>
			
			
			<label for="passwd"></label>
				<input type="password" name="passwd" id="passwd" placeholder="Password"></input>
				
			
			
			
			<input type="Submit" value="SignUp" ></input>
			<p>Already have an account <a href="http://www.geekapes.com"> Login </a>
			
			
		</fieldset>
	
	</form>
	</div>
	
	</div>

	<div id="wrapper_footer"><?php include($footer);?></div>
</body>

</html>



