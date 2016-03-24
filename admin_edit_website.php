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
	
	<script type="text/javascript" src="javascript/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu",
				"paste textcolor colorpicker textpattern"
			],
			toolbar1: "insertfile preview undo redo | styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
			image_advtab: true
		});
	</script>
	
</head>

<body>

	<?php
		require 'pagetop.php';
	?>
	
	<div class="content">
		
		<h1>Website bewerken</h1>
		
		<?php
			require 'functions/editwebsite/admin_edit_website.php';
			
			$sql = "SELECT * FROM  `pages` WHERE  `page` =  'home'";
						
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc ()) 
				{
					$homeText = $row["text"];
				}
			}
			else
			{
				die("Er is een fout opgetreden");
			}
			
			$sql = "SELECT * FROM  `pages` WHERE  `page` =  'vacancy'";
						
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc ()) 
				{
					$vacancyText = $row["text"];
				}
			}
			else
			{
				die("Er is een fout opgetreden");
			}
			
			$sql = "SELECT * FROM  `pages` WHERE  `page` =  'aboutus'";
						
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc ()) 
				{
					$aboutUsText = $row["text"];
				}
			}
			else
			{
				die("Er is een fout opgetreden");
			}
			
		?>
		
		<form method="post" action="admin_edit_website.php">
			<label for="home">Home:</label><br/>
			<textarea id="home" name="home"><?php if(isset($_POST["home"])){echo $_POST["home"];}else{echo $homeText;} ?></textarea><br/>
			<label for="vacancy">Vacature:</label><br/>
			<textarea id="vacancy" name="vacancy"><?php if(isset($_POST["vacancy"])){echo $_POST["vacancy"];}else{echo $vacancyText;} ?></textarea><br/>
			<label for="aboutUs">Over ons:</label><br/>
			<textarea id="aboutUs" name="aboutUs"><?php if(isset($_POST["aboutUs"])){echo $_POST["aboutUs"];}else{echo $aboutUsText;} ?></textarea><br/>
			<input type="submit" value="Aanpassen"/><br/>
		</form>
	</div>
</body>

</html>
