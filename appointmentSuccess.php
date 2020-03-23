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


  <!-- Custom JS for this template -->
  <script type="text/javascript">
    window.onload=function(){
      var home_btn = document.getElementById('home');
      var view_btn = document.getElementById('view');
      home_btn.addEventListener('click', function() {
        document.location.href = 'patientIndex.php';
      });
      view_btn.addEventListener('click', function() {
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
    <nav class="dt w-100 border-box pa3 ph5-ns">
        <a class="" title="Home">
          <img src="images/group One.png" class="dib w5 h5 br-100" alt="Site Name">
        </a>
        <div class="dtc v-mid w-75 tr">
          <a href="logout.php"><button class="btn" type="button">Log Out</button></a>
        </div>
      </nav>
      <h1 class="nt3 tc">Patient Mangament System</h1>
      <br /><br />
      <h2 class="nt3 tc">Appointment Request Form</h2>
    

    <!-- Content-->
    <div style="margin: auto; width: 50%;">
        <div style="margin-top: 70px;">
            <p class="fw9 green f4 nt4">Appointment Request Submitted!</p>
            <button id="home">Home</button>
            <button id="view">View Appointments</button>
        </div>
    </div>

  
</div>        
    
 

</body>
</html>