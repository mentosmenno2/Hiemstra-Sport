<?php
	if (isset($_GET["search"]))
	{
		$postedSearch = $_GET["search"];
	
	
		echo "<h2>Gebruikers:</h2>";
		
		$sql = "SELECT * 
					FROM  `users`
					WHERE  `ID` LIKE  '$postedSearch'
					OR  `email` LIKE  '$postedSearch'
					OR  `firstname` LIKE  '$postedSearch'
					OR  `middlename` LIKE  '$postedSearch'
					OR  `lastname` LIKE  '$postedSearch'
					OR  `usertype` LIKE  '$postedSearch'
					OR  `sex` LIKE  '$postedSearch'
					OR  `street` LIKE  '$postedSearch'
					OR  `homenumber` LIKE  '$postedSearch'
					OR  `town` LIKE  '$postedSearch'
					OR  `phone` LIKE  '$postedSearch'
					OR  `sports` LIKE  '$postedSearch'
					OR  `newsletter` LIKE  '$postedSearch'
					";
					
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "
			<table border='1px'>
			<tr>
			<th>Email</th> 
			<th>Naam</th>
			<th>Geslacht</th>
			<th>Adres</th>
			<th>Woonplaats</th>
			<th>Telefoon</th>
			<th>Sporten</th>
			<th>Nieuwsbrief</th>
			</tr>";
			while ($row = $result->fetch_assoc ()) 
			{
				echo "<tr>";
				echo "<td>";
				echo htmlentities($row["email"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["firstname"]);
				echo " ";
				echo htmlentities($row["middlename"]);
				echo " ";
				echo htmlentities($row["lastname"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["sex"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["street"]);
				echo " ";
				echo htmlentities($row["homenumber"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["town"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["phone"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["sports"]);
				echo "</td>";
				echo "<td>";
				echo htmlentities($row["newsletter"]);
				echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "Er zijn geen zoekresultaten voor uw zoekargument";
		}
	
		echo "<h2>Producten:</h2>";
		
		$sql = "SELECT * 
					FROM  `products`
					WHERE  `ID` LIKE  '$postedSearch'
					OR  `itemnumber` LIKE  '$postedSearch'
					OR  `name` LIKE  '$postedSearch'
					OR  `price` LIKE  '$postedSearch'
					";
					
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
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "Er zijn geen zoekresultaten voor uw zoekargument";
		}
		
	}
?>