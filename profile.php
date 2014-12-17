<?php
	include_once("/var/www/phpScripts/functions.php");
	$header_php = "/var/www/includes/header.php";
	$footer = "/var/www/includes/footer.php";
	
	if(logged_in() === false){

		header('Location:http://www.geekapes.com');
		exit();
	}

	 	
	 
?>

<!Doctype html>

<html>
<head>
	<title>Lucimferre</title>
	<meta charset="UTF-8">
	<link href="http://geekapes.com/css/main.css" rel="stylesheet" type="text/css">
	<link href="http://geekapes.com/css/register.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	
	<div id="wrapper_top">
	<?php include ($header_php);?>
	
	</div>
	<?php //echo $error; ?>
	<div id="wrapper_middle">
	
		<p> Profile </p>
	
	</div>

	<div id="wrapper_footer"><?php include($footer);?></div>
</body>

</html>

