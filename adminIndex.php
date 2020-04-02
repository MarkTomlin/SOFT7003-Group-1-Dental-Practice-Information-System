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
      var conf_app_btn = document.getElementById('conf_app');
      var edit_app_btn = document.getElementById('edit_app');
      conf_app_btn.addEventListener('click', function() {
        document.location.href = 'appointmentConfirm.php';
      });
      edit_app_btn.addEventListener('click', function() {
        document.location.href = 'appointmentEdit.php';
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
      <br />
      <h3 class="nt3 tc">Greetings <?= $fname ?> <?= $lname ?></h3>
    

    <!-- Content-->
    <div class="mw-70 center mt5">
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='view_cal' style="width: 380px">View Appointment Calender</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='conf_app'style="width: 380px">Confirm Appointments</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='edit_app'style="width: 380px">Edit Appointments</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='cre_bill' style="width: 380px">Create Patient Bill</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='view_pat'style="width: 380px">View Patients</button>
      </div>
      <div class="row mb3" style="display: flex; justify-content: center;">
        <button id='reg_acc'style="width: 380px">Register New User</button>
      </div>
    </div>
  
</div>        
    
 

</body>
</html>