<?php
  session_start();
  //var_dump(session_id());
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
  <div class="container-fluid" style="text-align: center">
    <!-- Navbar -->
    <?php include("../navbar.php"); ?>
    
    <!-- Headings -->
    <h1 class="nt3 tc">Administrator Mangament System</h1>
    <br /><br />
    <h2 class="nt3 tc">View Patients</h2>
    

    <!-- Content-->
    <div style="margin: auto; width: 80%;">
      <div style="margin-top: 70px;">
        <table class="table table-bordered">
            <tr>
              <th style="width: 100px">First Name</th>
              <th style="width: 100px">Last Name</th>
              <th style="width: 100px">Email</th>
              <th style="width: 100px">Phone Number</th>
            </tr>
        <?php
            //Connect to Database
            $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");

            //Stops SQL injection 
            $statement = $conn->prepare("SELECT * FROM User WHERE Type='patient'");
            $statement->execute();
        
            while($row=$statement->fetch()){
              $fname = $row['FirstName']; 
              $lname = $row['LastName']; 
              $email = $row['Email'];
              $pnum = $row['PhoneNumber'];

              if ($dent === '1'){
                  $dent = "John Smith";
              }

              //Display data in table row
              echo "<tr style='border: 1px solid black;'><td>$fname</td><td>$lname</td><td>$email</td><td>$pnum</td></tr>";
            }
            
        ?>
        </table>
        <br /><br />
        <div class="mw-70 center mt5">
          <button id="home" class="btn btn-primary" style="width: 200px; height: 48px; padding-right: 5px;">Home</button>
        </div>
      </div>
    </div>
  </div>        
</body>
</html>