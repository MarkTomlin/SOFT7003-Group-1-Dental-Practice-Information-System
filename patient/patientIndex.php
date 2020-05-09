<?php
  session_start();
  //var_dump(session_id());

  $fname = $_SESSION["fname"] ;
  $lname = $_SESSION["lname"] ;
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


  <!-- Custom JS for this template -->
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
  <div class="container">
    <!-- Navbar -->
    <?php include("../navbar.php"); ?>
    
    <!-- Headings -->
    <h1 class="nt3 tc">Patient Mangament System</h1>
    <br />
    <h3 class="nt3 tc">Greetings <?= $fname ?> <?= $lname ?></h3>
    

    <!-- Content-->
    <div class="mw-70 center mt5">
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='view_cal' style="width: 380px">View Appointment Calender</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='book_app'style="width: 380px">Request Appointment</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='view_app'style="width: 380px">View My Appointments</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='view_bill' style="width: 380px">View Bills</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='edit_acc'style="width: 380px">Edit Account Details</button>
      </div>
    </div>
  
  </div>        
</body>
</html>