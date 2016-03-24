<?php
	
	if (isset($_SESSION["userID"]) && $_SESSION["userID"] >= 1)
	{
		
	}
	else
	{
		$currentPage = basename($_SERVER['PHP_SELF']);
		header("location: login.php?errorMessage=1&redirectedFrom=" . $currentPage);
		die();
	}
	
?> 