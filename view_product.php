<?php
	require 'config.php';
	
	//check of de get product bestaat
	//check of id bestaat
	//laat alle eigenschappen zien met bestelknop
	
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
		<h1>Shop</h1>
		<?php
			require 'functions/viewProduct.php';
		?>
	</div>
	
	
</body>

</html>