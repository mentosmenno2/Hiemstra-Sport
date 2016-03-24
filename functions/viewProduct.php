<?php

	if (isset($_GET['addToCart']))
	{
		echo "Toegevoegd";
	}

	if(isset($_GET["product"])){
		$chosenProduct = $_GET["product"];
		$sql = "SELECT * 
					FROM  `products` 
					WHERE  `ID` = $chosenProduct";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc ())
			{
				echo "<h3>" . htmlentities($row["name"]) . "</h3>";
				echo "€" . htmlentities($row["price"]);
				echo "<br/>";
				echo "<a href='view_product.php?addToCart=" . $chosenProduct . "&product=" . $chosenProduct . "'><button>Toevoegen aan winkelmandje</button></a>";
			}
		}
		else
		{
			echo "Dit product bestaat niet.";
		}
	}
	else
	{
		echo "Geen product gevonden.";
	}
			
?>
