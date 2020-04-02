<?php
  session_start();
  //var_dump(session_id());
  ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  
  <title>Dental Info System</title>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    table {
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid black;
        text-align: center;
    }
  </style>


  <!-- Custom JS for this template -->
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
<div class="container">
    <nav class="dt w-100 border-box pa3 ph5-ns">
        <a class="" title="Home">
          <img src="images/group One.png" class="dib w5 h5 br-100" alt="Site Name">
        </a>
        <div class="dtc v-mid w-75 tr">
          <a href="logout.php"><button class="btn" type="button">Log Out</button></a>
        </div>
      </nav>
      <h1 class="nt3 tc">Administrator Mangament System</h1>
      <br /><br />
      <h2 class="nt3 tc">Confirm Appointments</h2>
    

    <!-- Content-->
    <div style="margin: auto; width: 80%;">
        <div style="margin-top: 70px;">
            <table style="border-collapse: collapse; border: 1px solid black;margin-left:auto;margin-right:auto;">
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

                $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
            
                //Stops SQL injection 
                $statement = $conn->prepare("SELECT * FROM Appointment WHERE Confirmation=?");
                $statement->bindParam (1, $false_conf);
                $statement->execute();
            
                while($row=$statement->fetch()){

                  $patient = $row['PatientID'];  
                  $date = $row['Date'];
                  $stime = $row['StartTime'];
                  $etime = $row['EndTime'];
                  $dent = $row['DentistID'];

                  if ($dent === '1'){
                      $dent = "John Smith";
                  }

                  if ($conf === '0'){
                      $conf = "No";
                  } else {
                      $conf = "Yes";
                  }
              
                  echo "<tr style='border: 1px solid black;'><td>$patient</td><td>$date</td><td>$stime</td><td>$etime</td><td>$dent</td><td><button>Confirm</button></td></tr>";
                }
                
            ?>
            </table>
            <br /><br />
            <div style="width:10%;margin-left:auto;margin-right:auto;"><button id="home" style="display:flex;justify-content:center;">Home</button></div>
        </div>
    </div>

  
</div>        
    
 

</body>
</html>