<?php	
	require 'config.php';
	require 'functions/checkLoggedIn.php';
	require 'functions/checkAdmin.php';
	
	if (isset($_GET["product"]) && $_GET["product"] > 0)
	{
		$productId = $_GET["product"];
		
		$sql = "SELECT * FROM  `products` WHERE  `ID` =  '$productId'";
		$result = $conn->query($sql);
		print_r ($result);
		if ($result->num_rows > 0) 
		{
			$sql = "DELETE FROM `products` WHERE `ID` = $productId";
			if (mysqli_query($conn, $sql)) 
			{
				header("location: admin_manage_products.php?redirectedFrom" . $currentPage);
				die();
			}
			else 
			{
				displayMessage("Dit product kan niet worden verwijderd");
			}
		}
		else
		{
			displayMessage("Dit product bestaat niet");
		}

	}
	
?> 

<!doctype html>

<html>

<head>
	<?php
		require 'head.php';
	?>
</head>

<body>
	<?php
		require 'pagetop.php';
	?>

	<div class="content">	

	</div>	
</body>

</html>
