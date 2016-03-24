<?php	
	require 'config.php';
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
			require 'functions/display_products.php';
		?>
	</div>
	
</body>

</html>
