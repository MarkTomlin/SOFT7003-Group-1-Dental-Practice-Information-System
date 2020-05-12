<?php
	session_start();

    //Get form data
	$fn = $_POST["fname"];	
	$ln = $_POST["lname"];	
	$em = $_POST["email"];
	$pw = $_POST["password"];
	$pn = $_POST["phone"];
    $ut = $_POST["u_type"];
	
	//set salt string then encrpt inputted password with salt using MD5 hashing. Password will be stored as an encrpted string in the database
	$salt = "3c7_pKr?";
	$encrypted_password = md5($pw . $salt); //applies MD5 hashing with salt string

	//Connect to database via PDO
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Create new user with INSERT SQL to Database 
	$statement = $conn->prepare("INSERT INTO User (FirstName, LastName, Email, Password, PhoneNumber, Type) 
		VALUES (?, ?, ?, ?, ?, ?)");
	//bindParam stops SQL injection exploit
	$statement->bindParam (1, $fn);
	$statement->bindParam (2, $ln);
	$statement->bindParam (3, $em);
	$statement->bindParam (4, $encrypted_password);
	$statement->bindParam (5, $pn);
	$statement->bindParam (6, $ut);
	$statement->execute();

    //redirect to confirmation page
	header ('Location: newUserSuccess.php');
?>