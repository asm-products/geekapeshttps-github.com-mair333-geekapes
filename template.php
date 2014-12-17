<?php
	include_once("/var/www/phpScripts/functions.php");
	$header_php = "/var/www/includes/header.php";
	
	 if(logged_in() === false){
			header('Location: http://geekapes.com');
	
	 }else if(logged_in() === true){

?>

<!Doctype html>

<html>
<head>
	<title>Geek Apes</title>
	<meta charset="UTF-8">
	<link href="http://lucimferre.com/css/main.css" rel="stylesheet" type="text/css">
	<link href="http://lucimferre.com/css/register.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	
	<div id="wrapper_top">
	<?php include ($header_php);?>
	
	<div>
	<?php //echo $error; ?>
	<div id="wrapper_middle">
	
		<p> Profile </p>
	
	</div>
</body>

</html>

<?php 
}// else if logged_in


?>