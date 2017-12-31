<?php

	require("../includes/config.php");
	$salt = "2a07usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi";
	//determine whether the form was submitted and which button was pressed. (signup/login)
	if($_SERVER["REQUEST_METHOD"] == "POST") //if signup was pressed
	{
		if($_POST["btn_type"] == "signup")
		{
			$username = $_POST["username"];
			$password = crypt($_POST["password"],$salt);
			$name = $_POST["name"];

			$sql = "INSERT INTO users (username, password, name) VALUES (?,?,?)";
			$rows = query($sql, $username, $password, $name); 


			if($rows !== false)
			{
				$rows = query("SELECT LAST_INSERT_ID() AS id"); //retrieve last insert id
				$_SESSION["id"] = $rows[0]["id"]; //store it as session id
				$_SESSION["name"] = $rows[0]["name"];
				redirect("index.php"); //reditect to index
			}
			else
			{
				apologize("There was a problem signing up.");
			}
		}
		else if($_POST["btn_type"] == "login")
		{
			$username = $_POST["username"];
			$password = crypt($_POST["password"],$salt);

			$sql = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
			$rows = query($sql, $username, $password);

			if($rows !== [])
			{
				$_SESSION["id"] = $rows[0]["user_id"];
				$_SESSION["name"] = $rows[0]["name"];
				redirect("index.php");
			}
			else
			{
				apologize("Incorrect login credentials");
			}
		}
	}

	render("../templates/login_form.php", [] ,true);
?>
