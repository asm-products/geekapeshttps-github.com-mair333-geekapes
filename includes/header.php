<?php
include_once("/var/www/phpScripts/functions.php");
$menu_include= "/var/www/includes/menu.php";


?>
<!Doctype>

<html>
<head>
	<meta charset="UTF-8">
	
	<link href="http://geekapes.com/css/header.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<header id="wrap_header">Lucimferre</header>
	
	
	
	<ul class="menu">
	<?php if(logged_in() === true){ ?>
		<li><a href="http://www.geekapes.com/profile.php"> Home </a> </li>
		<li><a href="http://www.geekapes.com/friends.php"> Friends </a> </li>
		<li><a href="http://www.geekapes.com/meetup.php"> Meetup </a> </li>
		<li><a href="http://www.geekapes.com/logout.php"> Logout </a> </li>
	
		<?php } ?>
	</ul>
	


	
</body>


</html>