<?php
	if (isset($_POST["home"]) && $_POST["vacancy"] && $_POST["aboutUs"]){
		$postedHome = $_POST["home"];
		$postedVacancy = $_POST["vacancy"];
		$postedAboutUs = $_POST["aboutUs"];
		$sql = "UPDATE  `pages` SET  `text` =  '$postedHome' WHERE  `page` =  'home';";
		if ($conn->query($sql) === TRUE) 
		{
			$sql2 = "UPDATE  `pages` SET  `text` =  '$postedVacancy' WHERE  `page` =  'vacancy';";
			if ($conn->query($sql2) === TRUE) 
			{
				$sql3 = "UPDATE  `pages` SET  `text` =  '$postedAboutUs' WHERE  `page` =  'aboutus';";
				if ($conn->query($sql3) === TRUE) 
				{
					displayMessage("Aangepast");
				} 
				else 
				{
					displayMessage("Error: " . $sql . "<br>" . $conn->error);
				}
			} 
			else 
			{
				displayMessage("Error: " . $sql . "<br>" . $conn->error);
			}
		} 
		else 
		{
				displayMessage("Error: " . $sql . "<br>" . $conn->error);
		}
	}
?> 