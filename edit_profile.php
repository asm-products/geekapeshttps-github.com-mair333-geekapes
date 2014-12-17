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
	<link href="http://www.geekapes.com/css/main.css" rel="stylesheet" type="text/css">
	<link href="http://www.geekapes.com/css/edit_profile.css" rel="stylesheet" type="text/css">
	
	
</head>

<body>
	
	<div id="wrapper_top">
	<?php include ($header_php);?>
	
	</div>
	
	<div id="wrapper_middle">
	
	
	<form class="profile_form" action="" method="POST">
		<h2 id="form_header">About Yourself</h2>
		
		<fieldset>
		
			<label for="Bio"></label>
				<textarea rows="10" cols="50" name="bio" id="bio" placeholder="Enter Your Bio here......"></textarea>
	<br>
			<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Email"></input>	
			<br>
			<label for="interested_in"></label>
				<select name="interested" id="interested_in" placeholder="Interested In">
					<option>Interested In</option>
					<option value="men">Men</option>
					<option value="women">Women</option>
					<option value="both">Both</option>
				</select>
				<br>
			
			<label for="realtionship"></label>
				<select name="relationship_status" id="relationship" placeholder="Relationship Status">
					<option value="" disabled selected>Relationship</option>
					<option value="single">Single</option>
					<option value="married">Married</option>
					<option value="divorced">Divorced</option>
					<option value="inRelationship">In a relationship</option>
					<option value="open">Open</option>
					<option value="complicated">Complicated</option>
				</select>
				<br>
				<label for="College"></label>
				<select name="College" id="College">
					<option>College</option>
					<option value="harvard">Harvard University</option>
					
				</select>
				
			
			
			<br>
			<input type="Submit" value="Save"></input>
			
			
		</fieldset>
	
	</form>
	</div>

		
	<div id="wrapper_footer"><?php include($footer);?></div>
	
</body>

</html>

<?php 



?>