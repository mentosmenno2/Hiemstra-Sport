<?php
	$sql = "INSERT INTO `0894225`.`users` (`ID`, `email`, `password`, `usertype`, `sex`, `firstname`, `middlename`, `lastname`, `street`, `homenumber`, `town`, `phone`, `sports`, `newsletter`) 
	VALUES (NULL, '$postedEmail', '$postedPassword', 'user', '$postedSex', '$postedFirstName', '$postedMiddleName', '$postedLastName', '$postedStreet', '$postedHomeNumber', '$postedTown', '$postedPhone', '$postedSports', '$postedNewsLetter');";
	if ($conn->query($sql) === TRUE) 
	{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$mailText = "<html><head><link rel='stylesheet' type='text/css' href='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/style.css'></head><body>
		<div id='logodiv'>
		<img id='logo' src='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/images/logo.png' />
		</div>
		<div class='content'>
		Beste " . $postedFirstName . ",<br />u bent nu geregistreerd op de website van Hiemstra Sport. Heeft u dit niet gedaan? Neem dan zo snel mogelijk <a href='mailto:0894225@hr.nl?Subject=Ik%20heb%20geen%20account%20gemaakt.&Body=Beste%20meneer%20Hiemstra%2C%0AIk%20heb%20geen%20account%20gemaakt%20op%20uw%20website.%0AKunt%20u%20deze%20alstublieft%20verwijderen%3F%0AMijn%20e-mail%20is%3A%20" . $postedEmail . "%0AAlvast%20bedankt.'>contact</a> met ons op.
		</div>
		</body></html>";
		if (mail($postedEmail,"Registratie op Hiemstra Sport",$mailText,$headers) == 1)
		{
			header("location: login.php?accountcreated=true");
			die();
		}
		else
		{
			displayMessage("Registratie gelukt maar email niet verzonden");
		}
	} 
	else 
	{
		displayMessage("Error: " . $sql . "<br>" . $conn->error);
	}
?> 