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
        //set page buttons to redirect to correct webpage on click - via EventListener
        var btn = document.getElementById('cancel');
        btn.addEventListener('click', function() {
            document.location.href = 'submitTreatment.php';
        });

        //Jquery for setting cost by radio selection
        $(radioSet).change(function() {
            var selected_value = $("input[name='gridRadios']:checked").val();
            
            if (selected_value === 'Examination'){
                $("input[name='cost']").val("£22.70"); //display value in currency format
            } else if (selected_value === 'Minor Treatment'){
                $("input[name='cost']").val("£62.10"); //display value in currency format
            } else if (selected_value === 'Surgery'){
                $("input[name='cost']").val("£269.30"); //display value in currency format
            }
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
    <h1 class="nt3 tc">Dentist Management System</h1>
    <br /><br />
    <h2 class="nt3 tc">Treatment Submission Form</h2>
    <br /><br /><br />

    <!-- Content-->
    <?php
        //Connect to Database via PDO
        $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
        
        //Get appointment data via ID
        $statement = $conn->prepare("SELECT * FROM Appointment WHERE ID=?");
        $statement->bindParam (1, $_GET['appointID']);
        $statement->execute();

        //Set data found to variables
        while($row=$statement->fetch()){
          $patientID = $row['PatientID'];
          $date = $row['Date'];
          $time = substr($row['StartTime'], 0, -3).' - '.substr($row['EndTime'], 0, -3); //remove seconds from time format and set as one string
        }
        $patient_name = $_GET['patient_name'];
        $appointID = $_GET['appointID'];
    ?>

    <!-- Treatment form -->
    <div class="container" style="margin: auto; width: 80%; border-radius: 25px; box-shadow: 0 0 3px gray;">
      <form method="POST" id="treatmentForm" action="submitTreatmentScript.php">
        <br>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Date:</label>
            <div class="col-sm-8">
            <?php echo "<input type='text' readonly class='form-control-plaintext' id='date' value=$date>"; ?> 
            </div>
        </div>
        <div class="form-group row">
            <label for="time" class="col-sm-2 col-form-label">Time:</label>
            <div class="col-sm-8">
                <?php echo "<input type='text' readonly class='form-control-plaintext' id='time' value='$time'>"; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="patient_name" class="col-sm-2 col-form-label">Patient:</label>
            <div class="col-sm-8">
                <?php echo "<input type='text' readonly class='form-control-plaintext' id='patient_name' value='$patient_name'>"; ?>
            </div>
        </div>
        <fieldset class="form-group" id="radioSet">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Treatment:</legend>
            <div class="col-sm-2">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="examination" value="Examination" checked>
                <label class="form-check-label" for="examination">
                    Examination
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="minor_treatment" value="Minor Treatment">
                <label class="form-check-label" for="minor_treatment">
                    Minor Treatment
                </label>
                </div>
                <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="surgery" value="Surgery">
                <label class="form-check-label" for="surgery">
                    Surgery
                </label>
                </div>
            </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <label for="cost" class="col-sm-2 col-form-label">Cost:</label>
            <div class="col-sm-8">
                <input type='text' readonly class='form-control-plaintext' name='cost' id='cost' value='£22.70'> <!-- cost value is changed on treatment radio selection via JQuery-->
            </div>
        </div>
        <!-- pass in patient and appointment ID with form -->
        <?php echo "<input type='hidden' id='patientID' name='patientID' value='$patientID'>"; ?>
        <?php echo "<input type='hidden' id='appointID' name='appointID' value='$appointID'>"; ?>
        <!-- form buttons -->
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