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
    <h2 class="nt3 tc">Patient Bills</h2>
    

    <!-- Content-->
    <div style="margin: auto; width: 80%;">
      <div style="margin-top: 70px;">
        <!-- Bill Table -->
        <table class="table table-bordered">
          <tr>
            <th style="width: 100px">Date</th>
            <th style="width: 100px">Dentist</th>
            <th style="width: 100px">Treatment</th>
            <th style="width: 100px">Cost</th>
            <th style="width: 100px">Due Date</th>
            <th style="width: 100px">Pay</th>
          </tr>
          <?php
            //Connect to Database via PDO 
            $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");

            //Select all bills belonging to the patient
            $statement = $conn->prepare("SELECT * FROM Payment WHERE PatientID=?");
            $statement->bindParam (1, $_SESSION['user_id']);
            $statement->execute();
        
            //loop through all bill found
            while($row=$statement->fetch()){
              //set bill data to new variables
              $billID = $row['ID']; 
              $appointID = $row['AppointmentID']; 
              $treatment = $row['Treatment'];
              $cost = '£'.$row['Cost'].'0';
              $due_date = $row['DueDate'];
              $paid = $row['Paid'];

              //Get appointment date and dentist ID
              $statement2 = $conn->prepare("SELECT Date, DentistID FROM Appointment WHERE ID=?");
              $statement2->bindParam (1, $appointID);
              $statement2->execute();
              $appointment=$statement2->fetch();
              $appoint_date = $appointment['Date'];
              $dentistID = $appointment['DentistID'];

              //Get dentist name
              $statement3 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
              $statement3->bindParam (1, $dentistID);
              $statement3->execute();
              $dentist=$statement3->fetch();
              $dentist_name = $dentist['FirstName'].' '.$dentist['LastName']; //set full name as one string variable
              
              //Display data in table row
              echo "<tr style='border: 1px solid black;'><td>$appoint_date</td><td>$dentist_name</td><td>$treatment</td><td>$cost</td><td>$due_date</td>";
              //if unpaid, display form button to payment screen. Else display as already paid
              if ($paid==0) {
                echo "<td><form action='payBill.php' method='get'><input type='hidden' id='billID' name='billID' value='$billID'><button type='submit' class='btn btn-primary'>Pay</button></form></td></tr>";
              } else if ($paid==1){
                echo "<td>Paid</td></tr>";
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