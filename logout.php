<?php	
	session_start();
	require 'config.php';
	require 'functions/checkLoggedIn.php';
	session_destroy();
	
	header("location: home.php");
	die();
?> 

<!doctype html>

<html>

<head>
	<?php
		require 'head.php';
	?>
</head>

<body>
	
</body>

</html>
