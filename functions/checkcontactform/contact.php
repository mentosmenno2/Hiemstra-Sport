<?php
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$contactMailText = "<html><head><link rel='stylesheet' type='text/css' href='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/style.css'></head><body>
		<div id='logodiv'>
		<img id='logo' src='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/images/logo.png' />
		</div>
		<div class='content'>" . 
		$postedContactName . 
		" heeft u een bericht gestuurd.
		<br /><br />" .
		nl2br($postedContactMessage) . 
		"<br /><br />
		Klik <a href='mailto:" . $postedContactEmail . "?subject=Reactie op contactformulier' >HIER</a> om te antwoorden.
		</div>
		</body></html>";
	
	$contactSendFromMailText = "<html><head><link rel='stylesheet' type='text/css' href='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/style.css'></head><body>
		<div id='logodiv'>
		<img id='logo' src='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/images/logo.png' />
		</div>
		<div class='content'>
		Beste " . 
		$postedContactName . 
		",
		<br /><br/>
		Bedankt voor uw email. Er wordt zo spoedig mogelijk contact met u opgenomen.
		<br /><br/>
		<b>Uw bericht:</b>
		<br /><br/>" .
		nl2br($postedContactMessage) . 
		"
		</div>
		</body></html>";
				
	if (mail("0894225@hr.nl","Contactformulier op website",$contactMailText,$headers) == 1 ){
		if (mail($postedContactEmail,"Contactformulier op www.hiemstrasport.nl",$contactSendFromMailText,$headers) == 1 ){
			header("location: contact.php?sent=1");
			die();
		}
	}
?> 
