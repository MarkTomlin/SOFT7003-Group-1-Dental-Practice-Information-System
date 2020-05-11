<?php
  session_start();

  $fname = $_SESSION["fname"] ;
  $lname = $_SESSION["lname"] ;
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
      var book_app_btn = document.getElementById('book_app');
      var view_app_btn = document.getElementById('view_app');
      book_app_btn.addEventListener('click', function() {
        document.location.href = 'appointmentForm.php';
      });
      view_app_btn.addEventListener('click', function() {
        document.location.href = 'viewAppointments.php';
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
    <h1 class="nt3 tc">Patient Mangament System</h1>
    <br />
    <h3 class="nt3 tc">Greetings <?= $fname ?> <?= $lname ?></h3>
    <br /><br /><br />

    <!-- Content-->
    <div class="mw-70 center mt5">
      <div class="row mb3" style="justify-content: center;">
        <button id='view_cal' class="btn btn-primary" style="width: 380px">View Appointment Calender</button>
      </div><br />
      <div class="row mb3" style="justify-content: center;">
        <button id='book_app' class="btn btn-primary" style="width: 380px">Request Appointment</button>
      </div><br />
      <div class="row mb3" style="justify-content: center;">
        <button id='view_app' class="btn btn-primary" style="width: 380px">View My Appointments</button>
      </div><br />
      <div class="row mb3" style="justify-content: center;">
        <button id='view_bill' class="btn btn-primary" style="width: 380px">View Bills</button>
      </div><br />
      <div class="row mb3" style="justify-content: center;">
        <button id='edit_acc' class="btn btn-primary" style="width: 380px">Edit Account Details</button>
      </div>
    </div>
  
  </div>        
</body>
</html>