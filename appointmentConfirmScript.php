<?php
	session_start();
		
	$app_id = $_GET["ID"];
	
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//Connect to database
	$statement = $conn->prepare("UPDATE Appointment SET Confirmation=1 WHERE ID=?");
	//bindParam stops SQL injection exploit
	$statement->bindParam (1, $app_id);
    $statement->execute();
    
    //Redirects back to appointment confirm page
    header ('Location: appointmentConfirm.php');
?>