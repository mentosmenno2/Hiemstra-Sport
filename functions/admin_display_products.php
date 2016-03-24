<?php

	$sql = "SELECT * FROM  `products`";
						
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "
			<table border='1px'>
			<tr>
			<th>Artikelnummer</th> 
			<th>Naam</th>
			<th>Prijs</th>
			</tr>";
			while ($row = $result->fetch_assoc ()) 
			{
				echo "<tr>";
				echo "<td>";
				echo htmlentities($row["itemnumber"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["name"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["price"]);
				echo "</td>";
				echo "<td>";
				echo "<a href='admin_delete_product.php?product=" . $row["ID"] . "' >Verwijderen</a>";
				echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "Er zijn geen producten.";
		}

?>