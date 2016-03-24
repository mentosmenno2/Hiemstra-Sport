<?php
	if (is_numeric($postedPrice))
	{
		require 'functions/checkaddproductform/addProduct.php';
	}
	else
	{
		displayMessage("De prijs is geen geldig getal");
	}
	
?> 