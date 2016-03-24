<?php	
	require 'config.php';
	require 'functions/checkregisterform/checkRegisterFormFilled.php';
	
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
		<h1>Registreren</h1>
		<form method="post" action="register.php<?php if (isset($_GET["redirectedFrom"])){ echo "?redirectedFrom=" . $redirectedFrom; } ?>">
			<label for="username">Email:</label><br/>
			<input id="username" type="email" name="email" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>" maxlength="45" required autofocus /><br/>
			<label for="password">Wachtwoord:</label><br/>
			<input id="password" type="password" name="password" value="<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>" maxlength="20" required /><br/>
			<label for="repeatPassword">Herhaal wachtwoord:</label><br/>
			<input id="repeatPassword" type="password" name="repeatPassword" value="<?php if(isset($_POST["repeatPassword"])){echo $_POST["repeatPassword"];} ?>" maxlength="20" required /><br/>
			<label for="sex">Geslacht:</label><br/>
			<input id="sex" type="radio" name="sex" value="man" checked required>Man
			<input id="sex" type="radio" name="sex" value="vrouw">Vrouw<br/>
			<label for="firstName">Voornaam:</label><br/>
			<input id="firstName" type="text" name="firstName" value="<?php if(isset($_POST["firstName"])){echo $_POST["firstName"];} ?>" maxlength="45" required /><br/>
			<label for="middleName">Tussenvoegsel:</label><br/>
			<input id="middleName" type="text" name="middleName" value="<?php if(isset($_POST["middleName"])){echo $_POST["middleName"];} ?>" maxlength="45" /><br/>
			<label for="lastName">Achternaam:</label><br/>
			<input id="lastName" type="text" name="lastName" value="<?php if(isset($_POST["lastName"])){echo $_POST["lastName"];} ?>" maxlength="45" required /><br/>
			<label for="street">Straat en huisnummer:</label><br/>
			<input id="street" type="text" name="street" value="<?php if(isset($_POST["street"])){echo $_POST["street"];} ?>" maxlength="45" required />
			<input id="homeNumber" type="text" name="homeNumber" value="<?php if(isset($_POST["homeNumber"])){echo $_POST["homeNumber"];} ?>" maxlength="10" required /><br/>
			<label for="town">Woonplaats:</label><br/>
			<input id="town" type="text" name="town" value="<?php if(isset($_POST["town"])){echo $_POST["town"];} ?>" maxlength="45" required /><br/>
			<label for="phone">Telefoonnummer:</label><br/>
			<input id="phone" type="tel" name="phone" value="<?php if(isset($_POST["phone"])){echo $_POST["phone"];} ?>" maxlength="45" /><br/>
			<label for="sports">Sport(en):</label><br/>
			<input id="sports" type="text" name="sports" value="<?php if(isset($_POST["sports"])){echo $_POST["sports"];} ?>" /><br/>
			<input id="newsLetter" type="checkbox" name="newsLetter" value="Yes" <?php if(isset($_POST["newsLetter"])){echo "checked";} ?> /> Ik wil op de hoogte worden gehouden van aanbiedingen via de email<br/>
			<input type="submit" value="Account aanmaken"/><br/>
		</form>
	</div>
</body>

</html>
