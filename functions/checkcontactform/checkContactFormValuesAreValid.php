<?php
	if (strpos($postedContactEmail,'@') !== false)
	{
		require 'functions/checkcontactform/contact.php';
	}
	else
	{
		displayMessage("Uw emailadres is niet geldig.");
	}
	
?> 