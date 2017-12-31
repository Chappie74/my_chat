<?php

	require("../includes/config.php");
	$salt = "2a07usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi";
	//determine whether the form was submitted and which button was pressed. (signup/login)
	if($_SERVER["REQUEST_METHOD"] == "POST") //if signup was pressed
	{
		if($_POST["btn_type"] == "signup")
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
		}
		else if($_POST["btn_type"] == "login")
		{

		}
	}

	render("../templates/login_form.php", [] ,true);
?>
