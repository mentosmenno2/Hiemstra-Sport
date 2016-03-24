<?php
	//check if variables exist
	if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["repeatPassword"]) && isset($_POST["sex"]) && isset($_POST["firstName"]) && isset($_POST["middleName"]) && isset($_POST["lastName"]) && isset($_POST["street"]) && isset($_POST["homeNumber"]) && isset($_POST["town"]) && isset($_POST["phone"]) && isset($_POST["sports"])) 
		{
			//set variables to post data
			$postedEmail = $_POST["email"];
			$postedPassword = $_POST["password"];
			$postedRepeatPassword = $_POST["repeatPassword"];
			$postedSex = $_POST["sex"];
			$postedFirstName = $_POST["firstName"];
			$postedMiddleName = $_POST["middleName"];
			$postedLastName = $_POST["lastName"];
			$postedStreet = $_POST["street"];
			$postedHomeNumber = $_POST["homeNumber"];
			$postedTown = $_POST["town"];
			$postedPhone = $_POST["phone"];
			$postedSports = $_POST["sports"];
			if(isset($_POST["newsLetter"]))
			{
				$postedNewsLetter = "yes";
			}
			else
			{
				$postedNewsLetter = "no";
			}
			require 'functions/checkregisterform/checkRegisterFormContainsNoEmptyData.php';
		}	
		
			/*
			$sql = "SELECT * FROM  `users` WHERE  `email` =  '$postedEmail'";
			$result = $conn->query($sql);
			$checkedData = [];
			if ($result->num_rows > 0) {
				displayMessage("Het door u gekozen emailadres is al bij ons geregistreerd.");
			}
			else
			{
				return true;
			}
			*/
	
?> 