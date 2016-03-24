<?php
	session_start();
	
	//database conection:
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "";

	$conn = new mysqli($servername, $username, $password, $dbname); //make connection
	if ($conn->connect_error) { //check connection
		die(mysqli_error());
	} 
	
	//behandel messages
	function displayMessage($message)	//function to show an errormessage with the right imput
	{
		echo "<script type='text/javascript'>alert('" . $message . "');</script>";
	}
	
	if (isset($_GET["errorMessage"])) //if error occured than check wich error occured and show the right error
	{
		$errorMessage = $_GET["errorMessage"];
		if ($errorMessage == 1)
		{
			displayMessage("U moet ingelogd zijn om deze pagina te bekijken.");
		}
		else if ($errorMessage == 2)
		{
			displayMessage("Deze pagina bestaat niet. U bent doorgestuurd naar de homepagina.");
		}
		else if ($errorMessage == 3)
		{
			displayMessage("U heeft niet de juiste rechten om deze pagina te bekijken. U bent doorgestuurd naar de homepagina.");
		}
	}
	
	
	$shoppingCart = [];
	if (isset($_COOKIE['shoppingCart'])) 
	{	
		$shoppingCart = unserialize($_COOKIE['shoppingCart']);
		if (is_array($shoppingCart))
		{
			if (isset($_GET['addToCart']))
			{
				$productToAdd = $_GET['addToCart'];
				array_push($shoppingCart, htmlentities($productToAdd));
			}
		}
		else
		{
			displayMessage("Er zijn onbekende problemen opgetreden in uw winkelmandje. Uw winkelmandje is geleegd.");
			$shoppingCart = [];
		}
	}
	setcookie("shoppingCart", serialize($shoppingCart), time()+60*60*24*100, "/");
	
	$currentPage = basename($_SERVER['PHP_SELF']);
	?>