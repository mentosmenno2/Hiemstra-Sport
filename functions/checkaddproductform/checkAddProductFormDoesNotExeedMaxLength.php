<?php
	if (strlen($postedProductNumber) <= 45)
	{
		if (strlen($psotedName) <= 65)
		{
			if (strlen($postedPrice) <= 45)
			{
				require 'functions/checkaddproductform/checkAddProductFormValuesAreValid.php';
			}
			else
			{
				displayMessage("De prijs mag niet groter zijn dan 45 tekens.");
			}
		}
		else
		{
			displayMessage("De naam mag niet langer dan 65 tekens zijn");
		}
	}
	else
	{
		displayMessage("De prijs mag maar 45 tekens lang zijn.");
	}
?> 