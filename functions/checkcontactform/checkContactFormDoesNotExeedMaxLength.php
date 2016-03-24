<?php
	if (strlen($postedContactName) <= 65)
	{
		if (strlen($postedContactEmail) <= 65)
		{
			require 'functions/checkcontactform/checkContactFormValuesAreValid.php';
		}
		else
		{
			displayMessage("Het emailadres mag niet langer dan 65 tekens zijn.");
		}
	}
	else
	{
		displayMessage("Uw naam mag niet langer dan 65 tekens zijn.");
	}
?> 