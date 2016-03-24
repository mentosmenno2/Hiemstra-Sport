<?php	
	require 'config.php';
	require 'functions/checkLoggedIn.php';
	require 'functions/editprofileform/checkEditProfileFormFilled.php';

	if (isset($_GET["accountedited"]) && $_GET["accountedited"] == "true")
	{
		displayMessage("Opgeslagen");
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
		<h1>Uw profiel</h1>
		<form method="post" action="edit_profile.php">
			<label for="sex">Geslacht:</label><br/>
			<input id="sex" type="radio" name="sex" value="man" <?php if($currentSex == "man"){echo "checked";}?> required>Man
			<input id="sex" type="radio" name="sex" value="vrouw" <?php if($currentSex == "vrouw"){echo "checked";}?>>Vrouw<br/>
			<label for="firstName">Voornaam:</label><br/>
			<input id="firstName" type="text" name="firstName" value="<?php echo $currentFirstName ?>" required /><br/>
			<label for="middleName">Tussenvoegsel:</label><br/>
			<input id="middleName" type="text" name="middleName" value="<?php echo $currentMiddleName ?>" /><br/>
			<label for="lastName">Achternaam:</label><br/>
			<input id="lastName" type="text" name="lastName" value="<?php echo $currentLastName ?>" required /><br/>
			<label for="street">Straat en huisnummer:</label><br/>
			<input id="street" type="text" name="street" value="<?php echo $currentStreet ?>" required />
			<input id="homeNumber" type="text" name="homeNumber" value="<?php echo $currentHomeNumber ?>" required /><br/>
			<label for="town">Woonplaats:</label><br/>
			<input id="town" type="text" name="town" value="<?php echo $currentTown ?>" required /><br/>
			<label for="phone">Telefoonnummer:</label><br/>
			<input id="phone" type="tel" name="phone" value="<?php echo $currentPhone ?>" /><br/>
			<label for="sports">Sport(en):</label><br/>
			<input id="sports" type="text" name="sports" value="<?php echo $currentSports ?>" /><br/>
			<input id="newsLetter" type="checkbox" name="newsLetter" value="Yes" <?php if($currentNewsLetter == "yes"){echo "checked";}?> /> Ik wil op de hoogte worden gehouden van aanbiedingen via de email<br/>
			<input type="submit" value="Aanpassen"/><br/>
		</form>
	</div>
</body>

</html>
