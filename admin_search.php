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
		<h1>Zoeken</h1>
		<form method="get" action="admin_search.php<?php if (isset($_GET["redirectedFrom"])){ echo "?redirectedFrom=" . $redirectedFrom; } ?>">
			<input id="search" type="text" name="search" placeholder="Zoeken..." value="<?php if(isset($_GET["search"])){echo $_GET["search"];} ?>" required autofocus />
			<input type="submit" value="Zoeken"/><br/>
		</form>
		
		<?php	
			require 'functions/adminSearch.php';
		?> 
		
	</div>
</body>

</html>