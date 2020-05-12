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
      var btn = document.getElementById('home');
      btn.addEventListener('click', function() {
        document.location.href = 'dentistIndex.php';
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
    <h1 class="nt3 tc">Dentist Management System</h1>
    <br /><br />
    <h2 class="nt3 tc">Submit Treatment Done</h2>
    <br /><br />
    <h3 class="nt3 tc">Your Appointments</h2>
    
    <!-- Content-->
    <div style="margin: auto; width: 80%;">
      <div style="margin-top: 70px;">
        <!-- Appointments Table for treatment -->
        <table class="table table-bordered">
            <tr>
              <th style="width: 100px">Date</th> 
              <th style="width: 100px">Time</th>
              <th style="width: 100px">Patient</th>
              <th style="width: 100px">Submit Treatment</th>
            </tr>
        <?php
            //Connect to Database via PDO
            $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
    
            //Get all the appointments belonging to the dentist
            $statement = $conn->prepare("SELECT * FROM Appointment WHERE DentistID=?");
            //bindParam stops SQL injection exploit 
            $statement->bindParam (1, $_SESSION["user_id"]);
            $statement->execute();

            //loop through each appointment found
            while($row=$statement->fetch()){
              //Get patient name
              $statement2 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
              $statement2->bindParam (1, $row['PatientID']);
              $statement2->execute();
              $row2=$statement2->fetch();

              //Set data variables
              $appointID = $row['ID'];
              $patientID = $row['PatientID']; 
              $date = $row['Date'];
              $time = substr($row['StartTime'], 0, -3).' - '.substr($row['EndTime'], 0, -3); //remove seconds from time format and set as one string
              $patient_fn = $row2['FirstName'];
              $patient_ln = $row2['LastName'];
              $patient_name = $patient_fn." ".$patient_ln;

              //Display data in table row
              echo "<tr style='border: 1px solid black;'><td>$date</td><td>$time</td><td>$patient_name</td>";

              //Check if already submitted
              $statement3 = $conn->prepare("SELECT ID FROM Payment WHERE AppointmentID=?");
              $statement3->bindParam (1, $appointID);
              $statement3->execute();
              $row3=$statement3->fetch();
              
              //if no payment bill already submitted, display button for treatment submission. Else mark as alreadly submitted 
              if ($row3==false){
                echo "<td><form action='treatmentForm.php' method='get'><input type='hidden' id='appointID' name='appointID' value='$appointID'><input type='hidden' id='patient_name' name='patient_name' value='$patient_name'><button type='submit' class='btn btn-primary'>Submit</button></form></td></tr>";
              } else {
                echo "<td>Submitted</td></tr>";
              }
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