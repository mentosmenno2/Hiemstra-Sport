<?php
	$sql = "
	UPDATE  users 
	SET  
	`sex` =  '$postedSex',
	`firstname` =  '$postedFirstName',
	`middlename` =  '$postedMiddleName',
	`lastname` =  '$postedLastName',
	`street` =  '$postedStreet',
	`homenumber` =  '$postedHomeNumber',
	`town` =  '$postedTown',
	`phone` =  '$postedPhone',
	`sports` =  '$postedSports',
	`newsletter` =  '$postedNewsLetter' WHERE `ID` = $userId
";
	if ($conn->query($sql) === TRUE) 
	{
		header("location: edit_profile.php?accountedited=true");
		die();
	} 
	else 
	{
		displayMessage("Error: " . $sql . "<br>" . $conn->error);
	}
?> 