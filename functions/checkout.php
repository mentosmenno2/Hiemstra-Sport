<?php
		$shoppedProducts = unserialize($_COOKIE['shoppingCart']);
		
		$totalPrice = 0;
		
		if (count($shoppedProducts) == 0  || !is_array($shoppedProducts))
		{
			header("location: shoppingCart.php");
			die();
		}
		else
		{
			$productsTable = "
					<b>Bestelde producten:</b>
					<br />
					<table border='1px'>
					<tr>
					<th>Artikelnr.</th>
					<th>Naam</th>
					<th>Prijs</th>
					</tr>";
			foreach ($shoppedProducts as &$item) {
				$sql = "SELECT * 
							FROM  `products` 
							WHERE  `ID` = $item";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc ())
					{
						$totalPrice = $totalPrice + htmlentities($row["price"]);
						$productsTable = $productsTable . "<tr>";
						$productsTable = $productsTable . "<td>";
						$productsTable = $productsTable . htmlentities($row["itemnumber"]);
						$productsTable = $productsTable . "</td>";
						$productsTable = $productsTable . "<td>";
						$productsTable = $productsTable . htmlentities($row["name"]);
						$productsTable = $productsTable . "</td>";
						$productsTable = $productsTable . "<td>";
						$productsTable = $productsTable . "€" . htmlentities($row["price"]);
						$productsTable = $productsTable . "</td>";
						$productsTable = $productsTable . "</tr>";
					}
				}
				else
				{
					header("location: shoppingCart.php");
					die();
				}
			}
			
			$productsTable = $productsTable . "
					<tr>
					<th>Totaal</th>
					<th></th>
					<th>€" . number_format($totalPrice, 2) . "</th>
					</tr>
					</table>";
			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$customerMailText = "<html><head><link rel='stylesheet' type='text/css' href='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/style.css'></head>
											<body>
											<div id='logodiv'>
											<img id='logo' src='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/images/logo.png' />
											</div>
											<div class='content'>
											Beste " . $currentFirstName . ",
											<br /><br />
											Bedankt voor uw bestelling. 
											De door u uitgekozen producten worden binnen een uur voor u in onze winkel klaargelegd. 
											U kunt bij het afhalen van uw producten afrekenen. 
											De gekozen artikelen blijven 3 dagen voor u beschikbaar.
											<br /><br />"
											. $productsTable .
											"</div>
											</body></html>";
			
			$ownersMailText = "<html><head><link rel='stylesheet' type='text/css' href='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/style.css'></head>
											<body>
											<div id='logodiv'>
											<img id='logo' src='http://stud.cmi.hro.nl/0894225/Project%202%20Definitief/images/logo.png' />
											</div>
											<div class='content'>
											Er is een nieuwe bestelling binnengekomen via uw website.
											<br /><br />
											<b>Klant:</b>
											<br />Naam: "
											. $currentFirstName . " " . $currentMiddleName . " " . $currentLastName . 
											"<br />Email: "
											. $currentEmail . 
											"<br />Adres: "
											. $currentStreet . " " . $currentHomeNumber . " " . $currentTown .
											"<br />Telefoon: "
											. $currentPhone.
											"<br /><br />"
											. $productsTable .
											"</div>
											</body></html>";
			
			if (mail($currentEmail,"Uw bestelling bij Hiemstra Sport",$customerMailText,$headers) == 1 && mail("0894225@hr.nl","Bestelling via website",$ownersMailText,$headers) == 1){
				echo "Beste " . $currentFirstName . ",
					<br />
					<br />
					Bedankt voor uw bestelling. De door u uitgekozen producten worden binnen een uur voor u in onze winkel klaargelegd. U kunt bij het afhalen van uw producten afrekenen. De gekozen artikelen blijven 3 dagen voor u beschikbaar.
					<br />
					<br />";
				echo $productsTable;
				$shoppedProducts = [];
				setcookie("shoppingCart", serialize($shoppedProducts), time()+60*60*24*100, "/");
			}
			else
			{
				header("location: shoppingCart.php");
				die();
			}
		}
		
		

?>