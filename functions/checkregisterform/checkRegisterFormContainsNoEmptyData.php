<?php
	if (!empty($postedEmail))
		{
			if (!empty($postedPassword))
			{
				if (!empty($postedRepeatPassword))
				{
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
											require 'functions/checkregisterform/checkRegistrationFormDoesNotExeedMaxLength.php';
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
				}
				else
				{
					displayMessage("Uw wachtwoord heeft u niet herhaald");
				}
			}
			else
			{
				displayMessage("Uw wachtwoord is niet ingevuld");
			}
		}
		else
		{
			displayMessage("Uw emailadres is niet ingevuld");
		}
?> 