<?php
	require 'config.php';
	require 'functions/checkcontactform/checkContactFormFilled.php';
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
		
		if (isset($_GET["sent"]) && $_GET["sent"] == 1)
		{
			displayMessage("Uw bericht is verzonden. Er wordt zo spoedig mogelijjk contact met u opgenomen.");
		}
		
		if (isset($_SESSION["userID"]) && $_SESSION["userID"] >= 1)
		{
			$userId = $_SESSION["userID"];
			//if user is logged in than save their login data in variables
			$sql = "SELECT * FROM  `users` WHERE  `ID` =  '$userId'";
			$result = $conn->query($sql);
			$loginData = [];
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc ()) 
				{	
					$currentEmail = $row["email"];
					$currentFirstName = $row["firstname"];
					$currentMiddleName = $row["middlename"];
					$currentLastName = $row["lastname"];
					if (empty($currentMiddleName)) {
						$currentCompleteName = $currentFirstName . " " . $currentLastName;
					}
					else
					{
						$currentCompleteName = $currentFirstName . " " . $currentMiddleName . " " . $currentLastName;
					}
				}
			}
		}
	?>
	
	<div class="content">
		<h1>Contact</h1>
		
		<form method="post" action="contact.php">
			<label for="contactName">Naam:</label><br/>
			<input id="contactName" type="text" name="contactName" value="<?php if(isset($_POST["contactName"])){echo $_POST["contactName"];} elseif(isset($currentCompleteName)){echo $currentCompleteName;} ?>" maxlength="65" required autofocus /><br/>
			<label for="contactName">Email:</label><br/>
			<input id="contactEmail" type="email" name="contactEmail" value="<?php if(isset($_POST["contactEmail"])){echo $_POST["contactEmail"];} elseif(isset($currentEmail)){echo $currentEmail;} ?>" maxlength="65" required /><br/>
			<label for="contactMessage">Bericht:</label><br/>
			<textarea id="contactMessage" name="contactMessage"><?php if(isset($_POST["contactMessage"])){echo $_POST["contactMessage"];} ?></textarea><br/>
			<input type="submit" value="Verzenden"/><br/>
		</form>
		
	</div>
	
	
</body>

</html>