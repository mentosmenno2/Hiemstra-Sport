<?php
	//check if variables exist
	if (isset($_POST["contactName"]) && isset($_POST["contactEmail"]) && isset($_POST["contactMessage"])) 
		{
			//set variables to post data
			$postedContactName = $_POST["contactName"];
			$postedContactEmail = $_POST["contactEmail"];
			$postedContactMessage = $_POST["contactMessage"];
			require 'functions/checkcontactform/checkContactFormContainsNoEmptyData.php';
		}	
	
?> 