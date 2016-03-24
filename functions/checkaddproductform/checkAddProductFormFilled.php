<?php
	//check if variables exist
	if (isset($_POST["productNumber"]) && isset($_POST["name"]) && isset($_POST["price"])) 
		{
			//set variables to post data
			$postedProductNumber = $_POST["productNumber"];
			$postedName = $_POST["name"];
			$postedPrice = $_POST["price"];
			require 'functions/checkaddproductform/checkAddProductFormContainsNoEmptyData.php';
		}	
	
?> 