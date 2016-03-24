<?php
		$shoppedProducts = unserialize($_COOKIE['shoppingCart']);
		
		if (isset($_GET["clear"]) && $_GET["clear"] == "true")
		{
			$shoppedProducts = [];
			setcookie("shoppingCart", serialize($shoppedProducts), time()+60*60*24*100, "/");
		}
		
		$totalPrice = 0;
		
		if (count($shoppedProducts) == 0 )
		{
			echo "Uw winkelmandje bevat geen producten. Vul uw winkelmandje in de <a href='shop.php'>shop</a>.";
		}
		else
		{
			echo "
					<table border='1px'>
					<tr>
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
						echo "<tr>";
						echo "<td>";
						echo htmlentities($row["name"]);
						echo "</td>";
						echo "<td>";
						echo "€" . htmlentities($row["price"]);
						echo "</td>";
						echo "</tr>";
					}
				}
				else
				{
					if(($key = array_search($item, $shoppedProducts)) !== false) {
						unset($shoppedProducts[$key]);
						setcookie("shoppingCart", serialize($shoppedProducts), time()+60*60*24*100, "/");
					}
					
				}
			}
			echo "
					<tr>
					<th>Totaal</th>
					<th>€" . number_format($totalPrice, 2) . "</th>
					</tr>";
			echo "</table>";
			echo "<a href='checkout.php'><button>Klaarleggen in de winkel</button></a>";
			echo "<a href='shoppingCart.php?clear=true'><button>Winkelmandje legen</button></a>";
		}
			
?>