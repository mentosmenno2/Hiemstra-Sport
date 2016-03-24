<?php
	if (!empty($postedSex))
	{
		if (!empty($postedFirstName))
		{
			if (!empty($postedLastName))
			{
				if (!empty($postedStreet))
				{
					if (!empty($postedHomeNumber))
					{
						if (!empty($postedTown))
						{
							require 'functions/editprofileform/checkEditProfileFormDoesNotExeedMaxLength.php';
						}
						else
						{
							displayMessage("Uw woonplaats is niet ingevuld");
						}
					}
					else
					{
						displayMessage("Uw huisnummer is niet ingevuld");
					}
				}
				else
				{
					displayMessage("Uw straat is niet ingevuld");
				}
			}
			else
			{
				displayMessage("Uw achternaam is niet ingevuld");
			}
		}
		else
		{
			displayMessage("Uw voornaam is niet ingevuld");
		}
	}
	else
	{
		displayMessage("Uw geslacht is niet ingevuld");
	}
?> 