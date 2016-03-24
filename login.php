<?php	
	require 'config.php';
	
	if (isset($_GET["redirectedFrom"]))
	{
		$redirectedFrom = $_GET["redirectedFrom"];
	}
	
	if (isset($_GET["accountcreated"]) && $_GET["accountcreated"] == "true")
	{
		displayMessage("Uw account is aangemaakt. U kunt nu inloggen.");
	}
	
	if (isset($_POST["email"]) && isset($_POST["password"]))
	{
		$postedEmail = $_POST["email"];
		$postedPassword = $_POST["password"];
		if (!empty($postedEmail))
		{
			if (!empty($postedPassword))
			{
				$sql = "SELECT * FROM  `users` WHERE  `email` =  '$postedEmail'";
				$result = $conn->query($sql);
				$loginData = [];
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc ()) 
					{
						array_push($loginData, 
						[	
							$row["ID"],
							$row["email"],
							$row["password"],
							$row["usertype"],
							$row["firstname"]
						]);
						if ($loginData[0][2] == $postedPassword)
						{
							$_SESSION["userID"] = $loginData[0][0];
							$_SESSION["email"] = $loginData[0][1];
							$_SESSION["userType"] = $loginData[0][3];
							$_SESSION["firstName"] = $loginData[0][4];
							if (isset($_GET["redirectedFrom"]))
							{
								$page_headers = @get_headers($redirectedFrom);
								if($page_headers[0] != 'HTTP/1.1 404 Not Found') {
									header("location: " . $redirectedFrom);
									die();
								}
								else {
									header("location: home.php");
									die();
								}
							}
							else
							{
								header("location: home.php");
								die();
							}
						}
						else
						{
							displayMessage("Uw wachtwoord is niet correct");
						}
						
					}
					
				}
				else
				{
					displayMessage("Uw email bestaat niet");
				}
			}
			else
			{
				displayMessage("Uw wachtwoord is niet ingevuld");
			}
		}
		else
		{
			displayMessage("Uw email is niet ingevuld");
		}
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
		<h1>Inloggen</h1>
		<form method="post" action="login.php<?php if (isset($_GET["redirectedFrom"])){ echo "?redirectedFrom=" . $redirectedFrom; } ?>">
			<label for="username">Email</label><br/>
			<input id="username" type="email" name="email" placeholder="Email" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>" maxlength="45" required autofocus /><br/>
			<label for="password">Wachtwoord</label><br/>
			<input id="password" type="password" name="password" placeholder="Wachtwoord" value="<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>" maxlength="20" required /><br/>
			<input type="submit" value="Inloggen"/><br/>
		</form>
	</div>
</body>

</html>
