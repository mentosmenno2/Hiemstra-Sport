<?php	
	require 'config.php';
	require 'functions/checkLoggedIn.php';
	require 'functions/checkAdmin.php';
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
		
		<h1>Producten</h1>
		
		<?php
			require 'functions/admin_display_products.php';
		?>
		
		<a href="admin_add_product.php">Product toevoegen</a>
	</div>
	
</body>

</html>
