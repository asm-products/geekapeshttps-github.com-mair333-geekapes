<?php
	
	include_once("/var/www/phpScripts/db_connection.php");
	include_once("/var/www/phpScripts/functions.php");
	include_once("/var/www/templates/template-variables.php");
	
	$header_php = "/var/www/includes/header.php";
	$footer = "/var/www/includes/footer.php";
	
	if(logged_in() === true){

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
				//die($log_in);
				$_SESSION['user_id']  = $log_in;
				header('Location:http://www.geekapes.com/profile.php');
				exit();

			}

		}
		
		}
	
	
	
?>

<!Doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>Geekapes</title>
	
		<link href="http://geekapes.com/css/main.css" rel="stylesheet" type="text/css"/>
		<link href="http://geekapes.com/css/index.css" rel="stylesheet" type="text/css"/>

	

	
</head>
<body>
	
	<header id="wrapper_top">
	<?php include ($header_php);?>

	</header>


	<div id="wrapper_middle">
	
	<div id="wrapper_form">
	<form class="form" action="index.php" method="POST">
		<h2>Login</h2>

		<?php 

			echo error_output($errors);

		?>
		
		<fieldset>
		
				
			<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Email/Username"></input>
			
			
			<label for="passwd"></label>
				<input type="password" name="passwd" id="passwd" placeholder="Password"></input>
				
			<input type="Submit" value="Login"></input>
			
			<p>Don't have an account ? <a href="register.php"> Register </a>
		
		
		</fieldset>
	
	</form>
	</div>
	</div>
	

	<div id="wrapper_footer"><?php include($footer);?></div>
	


</body>




</html>

<?php 
}//loggedin if statement

?>