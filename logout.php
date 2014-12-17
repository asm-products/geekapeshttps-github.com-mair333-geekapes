<?php

	session_start();

	if(isset($_SESSION['user_id']) || isset($_SESSION['username'])){
  		unset($_SESSION['user_id']);
  		unset($_SESSION['username']);

  	}
	
	session_destroy();
	
	//header('Location: http://www.lucimferre.com');

	if(isset($_SESSION['username'])){
	echo "Login Failed!!!";
		
} else {
	header('Location:http://www.geekapes.com');
	exit();
} 
	


?>