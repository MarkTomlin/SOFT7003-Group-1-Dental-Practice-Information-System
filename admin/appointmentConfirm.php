<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  
  <title>Dental Info System</title>

  <!-- Import Bootstrap -->
  <script type="text/javascript" src="../lib/jquery-3.5.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Javascript  -->
  <script type="text/javascript">
    window.onload=function(){
      //set page buttons to redirect to correct webpage on click - via EventListener
      var home_btn = document.getElementById('home');
      home_btn.addEventListener('click', function() {
        document.location.href = 'adminIndex.php';
      });
    }        
  </script>
 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>

</head>
<body>
  <div class="container-fluid" style="text-align: center">
    <!-- Navbar -->
    <?php include("../navbar.php"); ?>
    
    <!-- Headings -->
    <h1 class="nt3 tc">Administrator Management System</h1>
    <br /><br />
    <h2 class="nt3 tc">Confirm Appointments</h2>

    <!-- Content-->
    <div style="margin: auto; width: 80%;">
      <div style="margin-top: 70px;">
        <!-- Unconfirmed Appointments Table -->
        <table class="table table-bordered">
          <tr>
            <th style="width: 100px">Patient</th>
            <th style="width: 100px">Date</th>
            <th style="width: 100px">Start Time</th>
            <th style="width: 100px">End Time</th>
            <th style="width: 100px">Dentist</th>
            <th style="width: 100px">Confirm?</th>
          </tr>
          <?php
            $false_conf = 0;

            //Connect to database via PDO
            $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
        
            //Select appointments from database that are pending confirmation 
            $statement = $conn->prepare("SELECT * FROM Appointment WHERE Confirmation=?");
            //bindParam stops SQL injection exploit
            $statement->bindParam (1, $false_conf);
            $statement->execute();

            //loop through each appointment found
            while($row=$statement->fetch()){
              $ID = $row['ID'];
              $patient = $row['PatientID'];  
              $date = $row['Date'];
              $stime = $row['StartTime'];
              $etime = $row['EndTime'];
              $dent = $row['DentistID'];

              //get dentist's full name
              $statement2 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
              $statement2->bindParam (1, $dent);
              $statement2->execute();
              $dentist=$statement2->fetch();
              $fname_dentist=$dentist['FirstName'];
              $lname_dentist=$dentist['LastName'];

              //get patient's full name
              $statement3 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
              $statement3->bindParam (1, $patient);
              $statement3->execute();
              $patientName=$statement3->fetch();
              $fname_patient=$patientName['FirstName'];
              $lname_patient=$patientName['LastName'];

              //Display data in table row + form buttons for reject and confirm
              echo "<tr style='border: 1px solid black;'><td>$fname_patient $lname_patient</td><td>$date</td><td>$stime</td><td>$etime</td><td>$fname_dentist $lname_dentist</td>
              <td style='width: 10%'><div class='d-flex justify-content-around' style='justify-content: center; width: 200px; margin: 0px'>
              <form action='appointmentRejectScript.php' method='post'><input type='hidden' id='ID' name='ID' value='$ID'><button type='submit' class='btn btn-primary'>Reject</button></form>
              <form action='appointmentConfirmScript.php' method='post'><input type='hidden' id='ID' name='ID' value='$ID'><button type='submit' style='padding-left: 5px;' class='btn btn-primary'>Confirm</button></form></div></td></tr>";
            }
          ?>
        </table>
        <br /><br />
        <div class="mw-70 center mt5">
          <button id="home" class="btn btn-primary" style="width: 200px; height: 48px; padding-right: 5px;">Home</button>
        </div>
      </div>
    </div>
  </div>        
</body>
</html>