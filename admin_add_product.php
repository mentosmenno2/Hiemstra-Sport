<?php	
	require 'config.php';
	require 'functions/checkLoggedIn.php';
	require 'functions/checkAdmin.php';
	require 'functions/checkaddproductform/checkAddProductFormFilled.php';
	
	if (isset($_GET["productadded"]) && $_GET["productadded"] == "true")
	{
		displayMessage("Product toegevoegd");
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
		<h1>Product toevoegen</h1>
		<form method="post" action="admin_add_product.php">
			<label for="productNumber">Artikelnummer:</label><br/>
			<input id="productNumber" type="text" name="productNumber" value="<?php if(isset($_POST["productNumber"])){echo $_POST["productNumber"];} ?>" required autofocus /><br/>
			<label for="name">Naam:</label><br/>
			<input id="name" type="text" name="name" value="<?php if(isset($_POST["name"])){echo $_POST["name"];} ?>" required /><br/>
			<label for="price">Prijs:</label><br/>
			<input id="price" type="number" name="price" step="any" value="<?php if(isset($_POST["price"])){echo $_POST["price"];} ?>"  required /><br/>
			<input type="submit" value="Toevoegen"/><br/>
		</form>
	</div>
</body>

</html>
