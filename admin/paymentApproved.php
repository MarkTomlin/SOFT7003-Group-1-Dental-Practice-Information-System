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
      var home_btn = document.getElementById('home');
      var view_btn = document.getElementById('view');
      home_btn.addEventListener('click', function() {
        document.location.href = 'adminIndex.php';
      });
      view_btn.addEventListener('click', function() {
        document.location.href = 'managePatientBills.php';
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
    <h2 class="nt3 tc">Bill Management</h2>
    
    <!-- Content-->
    <div style="margin: auto; width: 80%;">
    <br /><br />
      <h3 class="display-4" style="color: green">Payment has been recognised and marked as paid!</h3>
      <div class="d-flex justify-content-between" style="padding-top: 7%; margin: auto; width: 40%;">  
        <button class="btn btn-primary" id="home" style="width: 200px; height: 48px; padding-right: 5px;">Home</button>
        <button class="btn btn-primary" id="view" style="width: 200px; height: 48px; padding-left: 5px;">View Bills</button>
      </div>
    </div>
  </div>        
</body>
</html>