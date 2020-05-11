<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  
  <title>Dental Info System</title>

  <!-- Import Bootstrap -->
  <script type="text/javascript" src="../lib/jquery-3.5.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Javascript  -->
  <script type="text/javascript">
    window.onload=function(){
      var btn = document.getElementById('cancel');
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
    <h2 class="nt3 tc">Appointment Request Form</h2>
    <br /><br /><br />

    <!-- Content-->
    <div class="container" style="margin: auto; width: 80%; border-radius: 25px; box-shadow: 0 0 3px gray;">
      <form method="POST" action="appointmentBookScript.php">
        <br>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Date:</label>
            <div class="col-sm-8">
              <input type="date" id="date" class="form-control" name="date" placeholder="Date" required> 
            </div>
        </div><br>
        <div class="form-group row">
            <label for="time" class="col-sm-2 col-form-label">Time:   </label>
            <div class="col-sm-8">
              <select type="time" id="time" class="form-control" name="time" placeholder="Time" required>
                <option value="" disabled selected>Please select a time</option>
                <option value="9">9:00</option>
                <option value="10">10:00</option>
                <option value="11">11:00</option>
                <option value="12">12:00</option>
                <option value="13">13:00</option>
                <option value="14">14:00</option>
                <option value="15">15:00</option>
                <option value="16">16:00</option>
              </select>  
            </div>
        </div>
        <div class="form-group row">
          <label for="dent" class="col-sm-2 col-form-label">Dentist:</label>
          <div class="col-sm-8">
            <select type="dent" id="dent" class="form-control" name="dent" placeholder="Dentist" required>
              <option value="" disabled selected>Please select your preferred Dentist</option>
              <?php 
                $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");

                $user_type = "dentist";
                
                //Select user data from all dentist users
                $statement = $conn->prepare("SELECT ID, FirstName, LastName FROM User WHERE Type=?");
                //bindParam stops SQL injection exploit
                $statement->bindParam (1, $user_type);
                $statement->execute();

                while($row=$statement->fetch()){
                  $dentID = $row['ID'];
                  $dentFN = $row['FirstName'];
                  $dentLN = $row['LastName'];
                  echo  "<option value=$dentID>$dentFN $dentLN</option>";
                }
              ?>  
            </select>  
          </div>
        </div>
        <div class="form-group row">
          <label for="reason" class="col-sm-2 col-form-label">Reason:</label>
          <div class="col-sm-8">
            <input type="text" id="reason" class="form-control" name="reason" placeholder="Reason for Appointment" required> 
          <div><br /> 
        </div>
        <div class="d-flex justify-content-between" style="padding-top: 7%;">
          <button class="btn btn-primary" type="button" id="cancel" style="width: 200px; height: 48px; padding-right: 20px;">Cancel</button>
          <button class="btn btn-primary" type="submit" name="action" style="width: 200px; height: 48px; padding-left: 20px;">Submit</button>
        </div>
        <br><br>
      </form>
    </div>
  </div>        
</body>
</html>