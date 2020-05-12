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
        document.location.href = 'patientIndex.php';
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
    <h1 class="nt3 tc">Patient Management System</h1>
    <br /><br />
    <h2 class="nt3 tc">View Appointments</h2>
  

    <!-- Content-->
    <div style="margin: auto; width: 80%;">
      <div style="margin-top: 70px;">
        <!-- Patient Appointments Table -->
        <table class="table table-bordered">
          <tr>
            <th style="width: 100px">Date</th>
            <th style="width: 100px">Start Time</th>
            <th style="width: 100px">End Time</th>
            <th style="width: 100px">Dentist</th>
            <th style="width: 100px">Status</th>
          </tr>
          <?php
            $user_id = $_SESSION["user_id"] ;

            //Connect to Database via PDO
            $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
        
            //Select all appointments belonging to patient user 
            $statement = $conn->prepare("SELECT * FROM Appointment WHERE PatientID=? ORDER BY Date ASC");
            //bindParam stops SQL injection exploit
            $statement->bindParam (1, $user_id);
            $statement->execute();

            //loop through each appointment found
            while($row=$statement->fetch()){
                //set data to variables
                $date = $row['Date'];
                $stime = $row['StartTime'];
                $etime = $row['EndTime'];
                $dent = $row['DentistID'];
                $conf = $row['Confirmation'];

                //get first and last name of dentist
                $statement2 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
                $statement2->bindParam (1, $dent);
                $statement2->execute();
                $dentist=$statement2->fetch();
                $fname_dentist=$dentist['FirstName'];
                $lname_dentist=$dentist['LastName'];

                //check confirmation status and set to correponding string and text colour
                if ($conf === '0'){
                  $conf = "Pending";
                  $col = '#ff9933';
                } elseif ($conf === '1') {
                  $conf = "Confirmed";
                  $col = 'green';
                } elseif ($conf === '2') {
                  $conf = "Rejected";
                  $col = 'red';
                }
              //Display data in table row
              echo "<tr style='border: 1px solid black;'><td>$date</td><td>$stime</td><td>$etime</td><td>$fname_dentist $lname_dentist</td><td style='color: $col'>$conf</td></tr>";
            }  
          ?>
        </table>
        <div class="d-flex justify-content-center" style="padding-top: 7%; margin: auto; width: 40%;"> 
          <button class="btn btn-primary" id="home" style="width: 200px; height: 48px; padding-right: 5px;">Home</button>
        </div>
      </div>
    </div>
  </div>        
</body>
</html>