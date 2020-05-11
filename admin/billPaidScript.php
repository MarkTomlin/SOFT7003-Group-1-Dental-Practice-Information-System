<?php
	session_start();
		
	$billID = $_POST["billID"];
	
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Connect to database
	$statement = $conn->prepare("UPDATE Payment SET Paid=1 WHERE ID=?");
	//bindParam stops SQL injection exploit
	$statement->bindParam (1, $billID);
    $statement->execute();
    
    //Redirects to a confirm page
    header ('Location: paymentApproved.php');
?>