<?php
	if (strpos($postedEmail,'@') !== false)
	{
		$sql = "SELECT * FROM  `users` WHERE  `email` =  '$postedEmail'";
		$result = $conn->query($sql);
		$checkedData = [];
		if ($result->num_rows > 0) {
			displayMessage("Het door u gekozen emailadres is al bij ons geregistreerd.");
		}
		else
		{
			if ($postedPassword == $postedRepeatPassword)
			{
				require 'functions/checkregisterform/addRegistration.php';
			}
			else
			{
				displayMessage("De 2 ingevoerde wachtwoorden komen niet overeen.");
			}
		}
		
	}
	else
	{
		displayMessage("Een emailadres moet een @ bevatten.");
	}
	
?> 