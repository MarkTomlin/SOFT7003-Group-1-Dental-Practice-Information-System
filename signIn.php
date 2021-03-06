<?php
	session_start();
		
	$em = $_POST["email"];
	$pw = $_POST["password"];

	//set salt string then encrpt inputted password with salt using MD5 hashing. Password can then be read to match encrpted password in database
	$salt = "3c7_pKr?";
	$encrypted_password = md5($pw . $salt);
	
	//Connect to database via PDO
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Connect to database
	$statement = $conn->prepare("SELECT id,firstname,lastname,email,password,type FROM User WHERE email=? AND password=?");
	//bindParam stops SQL injection exploit
	$statement->bindParam (1, $em);
	$statement->bindParam (2, $encrypted_password);
	$statement->execute();
	
	//if login not found
	if ($statement->rowCount() < 1) {
		//Redirects to login failure page
		header ('Location: loginFailure.php');
	}

	while($row_statement=$statement->fetch()){
		
		$user_type=$row_statement['type'];
	
		//Sets up the authentication session variable and stores the email in it
		$_SESSION["email"] = $em;

		//format user type to corresponding user app page
		$user_link = $user_type;
		$user_link .= "Index.php";

		//store account data as a session varible
		$_SESSION["user_id"] = $row_statement['id'];
		$_SESSION["fname"] = $row_statement['firstname'];
		$_SESSION["lname"] = $row_statement['lastname'];
		$_SESSION["user_type"] = $user_type;

		//Redirects to user's index page
		header ('Location: /'.$user_type.'/'.$user_link);
			
	}
	
?>