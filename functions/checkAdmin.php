<?php
	
	if ($currentUserType == "admin")
	{
	}
	else
	{
		$currentPage = basename($_SERVER['PHP_SELF']);
		header("location: home.php?errorMessage=3&redirectedFrom=" . $currentPage);
		die();
	}
	
?> 