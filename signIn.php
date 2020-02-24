<?php
	session_start();
		
	$em = $_POST["email"];
	$pw = $_POST["password"];
	
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Stops SQL injection 
	$statement = $conn->prepare("SELECT email,password,type FROM User WHERE email=? AND password=?");
	$statement->bindParam (1, $em);
	$statement->bindParam (2, $pw);
	$statement->execute();
	
	if ($statement->rowCount() < 1) {
		echo "<p>ERROR: Invalid Login!";
		echo " <a href='index.php'>Back</a></p>";
	}

	while($row_statement=$statement->fetch()){
		
		$user_type=$row_statement['type'];
	
		//Sets up the authentication session variable and stores the email in it
		$_SESSION["gatekeeper"] = $em;
		//Redirects to index page
		echo "<p>Login successful!";
		
		echo "<br /><br /><a href='index.php'>Back</a>";
		echo "<br /><a href='logout.php'>Logout</a>";

		$user_link = $user_type;
		$user_link .= "Index.php";
		echo '<br /><br />User Type: '.$user_type."     <a href='".$user_link."'>Proceed</a> </p>"; 
			
	}
	
?>