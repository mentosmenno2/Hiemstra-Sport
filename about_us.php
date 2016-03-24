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
	
		<h1>Over ons</h1>
	
		<?php
			require 'pages/about_us.php';
		?>
		
		<br />
		<div id="homepagephotos">
			<img class="homepagephotos" src="images/sportschoenen.jpg" />
			<img class="homepagephotos" src="images/kleding.jpg" />
			<img class="homepagephotos" src="images/overzicht.jpg" />
			<img class="homepagephotos" src="images/skies.jpg" />
		</div>
		
	</div>
	
	
</body>

</html>