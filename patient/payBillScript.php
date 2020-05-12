<?php
	session_start();
		
	//get bill ID via POST method
	$billID = $_POST["billID"];
	
	//Connect to Database via PDO 
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//set the bill's paid value to 1 - which indicates TRUE, so is paid
	$statement = $conn->prepare("UPDATE Payment SET Paid=1 WHERE ID=?");
	//bindParam stops SQL injection exploit
	$statement->bindParam (1, $billID);
    $statement->execute();
    
    //Redirects to a confirm page
    header ('Location: paymentApproved.php');
?>