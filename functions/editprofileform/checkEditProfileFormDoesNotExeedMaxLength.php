<?php
	if (strlen($postedSex) <= 10)
	{
		if (strlen($postedFirstName) <= 45)
		{
			if (strlen($postedMiddleName) <= 45)
			{
				if (strlen($postedLastName) <= 45)
				{
					if (strlen($postedStreet) <= 45)
					{
						if (strlen($postedHomeNumber) <= 10)
						{
							if (strlen($postedTown) <= 45)
							{
								if (strlen($postedPhone) <= 45)
								{
									if (strlen($postedSports) <= 65535)
									{
										if (strlen($postedNewsLetter) <= 10)
										{
											require 'functions/editprofileform/editProfile.php';
										}
										else
										{
											displayMessage("U heeft verkeerd aangegeven of u de nieuwsbrief wil ontvangen.");
										}
									}
									else
									{
										displayMessage("Uw sport mag maar 65535 tekens lang zijn.");
									}
								}
								else
								{
									displayMessage("Uw telefoonnummer mag maar 45 tekens lang zijn.");
								}
							}
							else
							{
								displayMessage("Uw woonplaats mag maar 45 tekens lang zijn.");
							}
						}
						else
						{
							displayMessage("Uw huisnummer mag maar 10 tekens lang zijn.");
						}
					}
					else
					{
						displayMessage("Uw straatnaam mag maar 45 tekens lang zijn.");
					}
				}
				else
				{
					displayMessage("Uw achternaam mag maar 45 tekens lang zijn.");
				}
			}
			else
			{
				displayMessage("Uw tussenvoegsel mag maar 45 tekens lang zijn.");
			}
		}
		else
		{
			displayMessage("Uw voornaam mag maar 45 tekens lang zijn.");
		}
	}
	else
	{
		displayMessage("Uw geslacht is niet goed ingevuld.");
	}

?> 