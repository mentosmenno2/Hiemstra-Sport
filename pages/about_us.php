<?php
$sql = "SELECT * FROM  `pages` WHERE  `page` =  'aboutus'";
		$result = $conn->query($sql);
		$loginData = [];
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc ()) 
			{	
				echo $row["text"];
			}
		}
		else
		{
			echo "Deze pagina is leeg";
		}
?>