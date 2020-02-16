<?php
	session_start();
		
	$em = $_POST["email"];
	$pw = $_POST["password"];
	
	$conn = new PDO("mysql:host=sql212.epizy.com;dbname=epiz_25212202_Dental;","epiz_25212202","q4JS0dPGEdBBO");
	
	//Stops SQL injection 
	$statement = $conn->prepare("SELECT email,password FROM User WHERE email=? AND password=?");
	$statement->bindParam (1, $em);
	$statement->bindParam (2, $pw);
	$statement->execute();
	
	
	If ($statement->fetch() == false) 
	{
		echo "<p>ERROR: Invalid Login!";
		echo " <a href='index.php'>Back</a></p>";
	}
	else 
	{
		//Sets up the authentication session variable and stores the email in it
		$_SESSION["gatekeeper"] = $em;
        //Redirects to index page
        echo "<p>Login successful!";
        //header ("");
        echo "<br /><br /><a href='index.php'>Back</a>";
        echo "<br /><a href='logout.php'>Logout</a></p>"; 
	}
?>