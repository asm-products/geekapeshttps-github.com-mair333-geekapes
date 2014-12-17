<?php
	$errors = array();
	$name = 1;
	$email = 2;

	if($name == 1){
		$errors[] = "Name too long";
	}
	
		$errors[] = "Email is incorrect";
	
	

function output_errors($errors){

	$output = array();

	foreach($errors as $error){
		$output[] = '<li>' . $error . '<li>';
	}

	return '<ul>' . implode('', $output) . '<ul>';
}

function error_outputs($errors){

	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

echo error_outputs($errors);


include_once("/var/www/phpScripts/functions.php");

if(logged_in() == true){

	echo 'True';
}elseif(logged_in() ==false){
	echo 'False';
}

if()




?>