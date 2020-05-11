<?php
    session_start();

    //Get form variables
    $patientID = $_POST["patientID"];
    $appointID = $_POST["appointID"];
    $treatment = $_POST["gridRadios"];
    
    //set cost to float value
    $cost = $_POST["cost"];
    $cost = floatval(substr($cost, 2, 5));
    
    $due_date =  date('Y-m-d', strtotime("+30 days")); //get the date 30 days from now
    $paid = 0;
	
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//INSERT SQL statement
	$statement = $conn->prepare("INSERT INTO Payment (PatientID, AppointmentID, Treatment, Cost, DueDate, Paid) 
        VALUES (?, ?, ?, ?, ?, ?)");
    //bindParam stops SQL injection
	$statement->bindParam (1, $patientID);
	$statement->bindParam (2, $appointID);
	$statement->bindParam (3, $treatment);
	$statement->bindParam (4, $cost);
	$statement->bindParam (5, $due_date);
    $statement->bindParam (6, $paid);
	$statement->execute();

    header ('Location: submitTreatment.php');
?>