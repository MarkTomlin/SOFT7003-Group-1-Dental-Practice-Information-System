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
      var btn = document.getElementById('home');
      btn.addEventListener('click', function() {
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
    <h2 class="nt3 tc">Manage Patient Bills</h2>
    

    <!-- Content-->
    <div style="margin: auto; width: 80%;">
      <div style="margin-top: 70px;">
        <table class="table table-bordered">
            <tr>
              <th style="width: 100px">Date</th>
              <th style="width: 100px">Patient</th>
              <th style="width: 100px">Treatment</th>
              <th style="width: 100px">Cost</th>
              <th style="width: 100px">Due Date</th>
              <th style="width: 100px">Manage</th>
            </tr>
        <?php
            //Connect to Database
            $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");

            //Select all Bill from database that are unpaid
            $statement = $conn->prepare("SELECT * FROM Payment WHERE Paid=0");
            $statement->execute();
        
            while($row=$statement->fetch()){
                $billID = $row['ID'];
                $patientID = $row['PatientID']; 
                $appointID = $row['AppointmentID']; 
                $treatment = $row['Treatment'];
                $cost = '£'.$row['Cost'].'0';
                $due_date = $row['DueDate'];

                //Get patient name
                $statement2 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
                $statement2->bindParam (1, $patientID);
                $statement2->execute();
                $patient=$statement2->fetch();
                $patient_name = $patient['FirstName'].' '.$patient['LastName'];

                //Get appointment date
                $statement3 = $conn->prepare("SELECT Date FROM Appointment WHERE ID=?");
                $statement3->bindParam (1, $appointID);
                $statement3->execute();
                $appointment=$statement3->fetch();
                $appoint_date = $appointment['Date'];
                
                //Display data in table row
                echo "<tr style='border: 1px solid black;'><td>$appoint_date</td><td>$patient_name</td><td>$treatment</td><td>$cost</td><td>$due_date</td>";
                echo "<td><form action='billManage.php' method='get'><input type='hidden' id='patient_name' name='patient_name' value='$patient_name'><input type='hidden' id='billID' name='billID' value='$billID'><button type='submit' class='btn btn-primary'>Select</button></form></td></tr>";
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