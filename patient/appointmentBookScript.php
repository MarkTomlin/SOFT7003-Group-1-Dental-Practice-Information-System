<?php
    session_start();
    
    $user_id = $_SESSION["user_id"] ;

    //Get form variables
	$date = $_POST["date"];	
	$time = $_POST["time"];	
	$dent = $_POST["dent"];
    $reas = $_POST["reason"];

    $time_str = strval($time);
    
    $stime = $time_str . ":00:00";
    $etime_str = strval($time + 1);
    $etime = $etime_str . ":00:00";
    $emer = 0;
    $conf = 0;
	
	$conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
	
	//INSERT SQL statement 
	$statement = $conn->prepare("INSERT INTO Appointment (PatientID, DentistID, Date, StartTime, Endtime, Reason, Emergency, Confirmation) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    //bindParam stops SQL injection
	$statement->bindParam (1, $user_id);
	$statement->bindParam (2, $dent);
	$statement->bindParam (3, $date);
	$statement->bindParam (4, $stime);
	$statement->bindParam (5, $etime);
    $statement->bindParam (6, $reas);
    $statement->bindParam (7, $emer);
    $statement->bindParam (8, $conf);
	$statement->execute();

    header ('Location: appointmentSuccess.php');
			
	
?>