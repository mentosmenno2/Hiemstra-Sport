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
	
		<h1>Winkelmandje</h1>
		
		<?php
			require 'functions/viewShoppingCart.php';
		?>
		<br>Let op: De door u bestelde producten moeten binnen drie dagen worden opgehaald. 
	</div>
	
</body>

</html>
