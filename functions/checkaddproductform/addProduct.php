<?php
	$sql = "INSERT INTO `0894225`.`products` (`ID`, `itemnumber`, `name`, `price`) 
	VALUES (NULL, '$postedProductNumber', '$postedName', '$postedPrice');";
	if ($conn->query($sql) === TRUE) 
	{
		header("location: admin_add_product.php?productadded=true");
		die();
	} 
	else 
	{
		displayMessage("Error: " . $sql . "<br>" . $conn->error);
	}
?> 