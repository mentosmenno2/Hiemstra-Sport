<label for="show-menu" class="show-menu"><img id="menuicon" src="images/menu.svg" /> Menu</label>
<input type="checkbox" id="show-menu" role="button">
<ul class="menu" id="menu">
<a  href="home.php"><li>Home</li></a>
<a href="vacancy.php"><li>Vacatures</li></a>
<a href="contact.php"><li>Contact</li></a>
<a href="about_us.php"><li>Over ons</li></a>
<a href="shop.php"><li>Shop</li></a>
<a href="shoppingCart.php"><li>Winkelmandje</li></a>

<?php
	if (isset($_SESSION["userID"]) && $_SESSION["userID"] >= 1)
	{
		echo "<a href='edit_profile.php'><li>" . htmlentities($_SESSION["firstName"]) . "&#39;s profiel</li></a>";
		echo "<a href='logout.php'><li>Uitloggen</li></a>";
	}
	else
	{
		echo "<a href='register.php'><li>Registreren</li></a>";
		if ($currentPage != "login.php" && $currentPage != "register.php")
		{
			echo "<a href='login.php?redirectedFrom=" . $currentPage . "'><li>Inloggen</li></a>";
		}
		else
		{
			echo "<a href='login.php'><li>Inloggen</li></a>";
		}
	}

?>
</ul>
<?php
	if (isset($_SESSION["userType"]) && $_SESSION["userType"] == "admin")
	{
		echo "
		<ul class='menu' id='adminmenu'>
		<a href='admin_edit_website.php'><li>Website bewerken</li></a>
		<a href='admin_manage_products.php'><li>Producten</li></a>
		<a href='admin_search.php'><li>Zoeken</li></a>
		</ul>
		";
	}
	
?>