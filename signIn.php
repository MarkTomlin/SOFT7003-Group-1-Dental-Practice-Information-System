<?php
	session_start();
		
	$em = $_POST["email"];
	$pw = $_POST["password"];

	$salt = "3c7_pKr?";
	$encrypted_password = md5($pw . $salt);
	
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Connect to database
	$statement = $conn->prepare("SELECT id,firstname,lastname,email,password,type FROM User WHERE email=? AND password=?");
	//bindParam stops SQL injection exploit
	$statement->bindParam (1, $em);
	$statement->bindParam (2, $encrypted_password);
	$statement->execute();
	
	if ($statement->rowCount() < 1) {
		echo "<p>ERROR: Invalid Login!";
		echo " <a href='login.php'>Back</a></p>";
	}

	while($row_statement=$statement->fetch()){
		
		$user_type=$row_statement['type'];
	
		//Sets up the authentication session variable and stores the email in it
		$_SESSION["gatekeeper"] = $em;

		$user_link = $user_type;
		$user_link .= "Index.php";

		$_SESSION["user_id"] = $row_statement['id'];
		$_SESSION["fname"] = $row_statement['firstname'];
		$_SESSION["lname"] = $row_statement['lastname'];

		//Redirects to index page
		header ('Location: '.$user_link.'');
			
	}
	
?>