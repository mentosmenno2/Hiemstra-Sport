<?php
	if (!empty($postedContactName))
		{
			if (!empty($postedContactEmail))
			{
				if (!empty($postedContactMessage))
				{
					require 'functions/checkcontactform/checkContactFormDoesNotExeedMaxLength.php';
				}
				else
				{
					displayMessage("Er is geen bericht ingevuld");
				}
			}
			else
			{
				displayMessage("Uw emailadres is niet ingevuld");
			}
		}
		else
		{
			displayMessage("Uw naam is niet ingevuld");
		}
?> 