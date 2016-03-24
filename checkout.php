<?php
	require 'config.php';
	require 'functions/checkLoggedIn.php';
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
		<?php
			require 'functions/checkout.php';
		?>
		
	</div>
</body>

</html>
