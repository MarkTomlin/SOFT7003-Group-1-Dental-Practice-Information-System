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
  <div class="container">
    <!-- Navbar -->
    <?php include("../navbar.php"); ?>
    
    <!-- Headings -->
    <h1 class="nt3 tc">Patient Mangament System</h1>
    <br /><br />
    <h2 class="nt3 tc">Appointment Request Form</h2>
    

    <!-- Content-->
    <div style="margin: auto; width: 50%;">
        <div class="form mb2">
            <form method="POST" action="appointmentBookScript.php">
            <div class="form-field">
                <label for="date">Date:   </label><input type="date" id="date" class="form-control" name="date" placeholder="Date" style="width: 90%;
                padding: 15px 15px;
                margin: 5px 0 0 15px;
                display: inline-block;
                border: 1px solid whitesmoke;
                border-radius: 4px;
                box-sizing: border-box" required> <br>
                <span class="err-icon">&nbsp;</span>
            </div>
            
            <div class="form-field">
                <label for="time">Time:   </label><select type="time" id="time" class="form-control" name="time" placeholder="Time" style="width: 90%;
                    padding: 15px 15px;
                    margin: 5px 0 0 15px;
                    display: inline-block;
                    border: 1px solid whitesmoke;
                    border-radius: 4px;
                    box-sizing: border-box" required>
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

            <div class="form-field">
                <label for="dent">Dentist:   </label><select type="dent" id="dent" class="form-control" name="dent" placeholder="Dentist" style="width: 90%;
                    padding: 15px 15px;
                    margin: 5px 0;
                    display: inline-block;
                    border: 1px solid whitesmoke;
                    border-radius: 4px;
                    box-sizing: border-box" required>
                    <option value="" disabled selected>Please select your preferred Dentist</option>

                    <?php 

                      $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");

                      $user_type = "dentist";
                      
                      //Stops SQL injection 
                      $statement = $conn->prepare("SELECT ID, FirstName, LastName FROM User WHERE Type=?");
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

            <div class="form-field">
                <label for="reason">Reason:   </label><input type="text" id="reason" class="form-control" name="reason" placeholder="Reason for Appointment" style="width: 90%;
                padding: 15px 15px;
                margin: 5px 0;
                display: inline-block;
                border: 1px solid whitesmoke;
                border-radius: 4px;
                box-sizing: border-box" required> <br>
                <span class="err-icon">&nbsp;</span>
            </div>

            <br/><br/>
            <button id="cancel">Cancel</button><button type="submit" name="action">Submit</button>
            </form>
        </div>
    </div>
  </div>        
</body>
</html>