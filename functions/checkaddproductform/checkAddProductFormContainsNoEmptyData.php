<?php
	if (!empty($postedProductNumber))
		{
			if (!empty($postedName))
			{
				if (!empty($postedPrice))
				{
					require 'functions/checkaddproductform/checkAddProductFormDoesNotExeedMaxLength.php';
				}
				else
				{
					displayMessage("De prijs is niet ingevuld");
				}
			}
			else
			{
				displayMessage("De naam is niet ingevuld");
			}
		}
		else
		{
			displayMessage("Het artikelnummer is niet ingevuld");
		}
?> 