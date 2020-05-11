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
        var btn = document.getElementById('home');
        btn.addEventListener('click', function() {
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
    <br /><br />

    <!-- Content-->
    <?php
        $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
        
        //Get bill data
        $statement = $conn->prepare("SELECT * FROM Payment WHERE ID=?");
        $statement->bindParam (1, $_GET['billID']);
        $statement->execute();
        $bill=$statement->fetch();

        $billID = $bill['ID'];
        $date = $bill['Date'];
        $treatment = $bill['Treatment'];
        $cost = '£'.$bill['Cost'].'0';;

        $patient_name = $_GET['patient_name'];
        $appointID = $_GET['appointID'];
    ?>

    <div class="container" style="margin: auto; width: 80%; border-radius: 25px; box-shadow: 0 0 3px gray;">
        <?php 
            echo "<br /><p>ID: $billID<br />Patient: $patient_name<br />Treatment: $treatment<br />Cost: $cost</p>"; 
        ?>
        <br />
        <h4 class="nt3 tc">Confirm Physical Payment</h4>
        <p>
            Has the patient paid physically in house or over the phone?
            <?php echo "<form action='billPaidScript.php' method='post'><input type='hidden' id='billID' name='billID' value='$billID'><button type='submit' class='btn btn-primary'>Confirm Payment</button></form><br /><br />"; ?>
        </p>
    </div>
    <div class="mw-70 center mt5">
          <button id="home" class="btn btn-primary" style="width: 200px; height: 48px; padding-right: 5px;">Back</button>
    </div>
  </div>        
</body>
</html>