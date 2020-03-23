<?php
	session_start();

	$fn = $_POST["fname"];	
	$ln = $_POST["lname"];	
	$em = $_POST["email"];
	$pw = $_POST["password"];
	$pn = $_POST["phone"];
	$tp = "patient";
	
	$salt = "3c7_pKr?";
	$encrypted_password = md5($pw . $salt); //applies MD5 hashing with salt string

	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Stops SQL injection 
	$statement = $conn->prepare("INSERT INTO User (FirstName, LastName, Email, Password, PhoneNumber, Type) 
		VALUES (?, ?, ?, ?, ?, ?)");
	$statement->bindParam (1, $fn);
	$statement->bindParam (2, $ln);
	$statement->bindParam (3, $em);
	$statement->bindParam (4, $encrypted_password);
	$statement->bindParam (5, $pn);
	$statement->bindParam (6, $tp);
	$statement->execute();

	header ('Location: registerSuccess.php');
	
?>