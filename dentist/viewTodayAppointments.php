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
        var btn = document.getElementById('home');
        btn.addEventListener('click', function() {
        document.location.href = 'dentistIndex.php';
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
        <h1 class="nt3 tc">Dentist Mangament System</h1>
        <br /><br />
        <h2 class="nt3 tc">Today's Appointments</h2>

        <!-- Content-->
        <div style="margin: auto; width: 80%;">
            <div style="margin-top: 70px;">
                <table class="table table-bordered">
                <tr>
                    <th style="width: 100px">Start Time</th>
                    <th style="width: 100px">End Time</th>
                    <th style="width: 100px">Patient</th>
                    <th style="width: 100px">Reason</th>
                </tr>
                <?php
                $user_id = $_SESSION["user_id"] ;
                $today = date('Y-m-d');

                //Connect to Database
                $conn = new PDO("mysql:host=fdb24.awardspace.net;dbname=3332660_dental;","3332660_dental","dental1234");
            
                //Select all of todays appointments belonging to the dentist user 
                $statement = $conn->prepare("SELECT * FROM Appointment WHERE DentistID=? AND Date=? ORDER BY StartTime ASC");
                //bindParam stops SQL injection exploit
                $statement->bindParam (1, $user_id);
                $statement->bindParam (2, $today);
                $statement->execute();
            
                while($row=$statement->fetch()){
                    $stime = $row['StartTime'];
                    $etime = $row['EndTime'];
                    $patientID = $row['PatientID'];
                    $reason = $row['Reason'];

                    $statement2 = $conn->prepare("SELECT FirstName, LastName FROM User WHERE ID=?");
                    $statement2->bindParam (1, $patientID);
                    $statement2->execute();
                    $patientRow=$statement2->fetch();
                    $patient_name = $patientRow['FirstName'].$patientRow['LastName'];

                    //Display data in table row
                    echo "<tr style='border: 1px solid black;'><td>$stime</td><td>$etime</td><td>$patient_name</td><td>$reason</td></tr>";
                }  
                if ($row == false){
                    echo "<h3>No appointments scheduled for today!</h3>";
                }
                ?>
                </table>
                <div class="d-flex justify-content-center" style="padding-top: 7%; margin: auto; width: 40%;"> 
                <button class="btn btn-primary" id="home" style="width: 200px; height: 48px; padding-right: 5px;">Home</button>
                </div>
            </div>
        </div>
    </div>        
</body>
</html>