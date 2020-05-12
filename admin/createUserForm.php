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
    <h1 class="nt3 tc">Administrator Management System</h1>
    <br /><br />
    <h2 class="nt3 tc">Create User Form</h2>
    <br /><br /><br />

    <!-- Content-->
    <div class="container" style="margin: auto; width: 80%; border-radius: 25px; box-shadow: 0 0 3px gray;">
        <br />
        <h5>Please enter the details of the new user</h5>
        <form method="POST" id="userForm" action="addUserScript.php">
            <br />
            <div class="form-group row">
                <label for="u_type" class="col-sm-2 col-form-label">User Type:</label>
                <div class="col-sm-8">
                    <select id="u_type" name="u_type" class="form-control">
                        <option selected>Choose...</option>
                        <option value="admin">Administrator</option>
                        <option value="dentist">Dentist</option>
                        <option value="patient">Patient</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
                <div class="col-sm-8">
                    <input type='text' class='form-control' id='fname' name='fname' placeholder="First Name" required> 
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
                <div class="col-sm-8">
                    <input type='text' class='form-control' id='lname' name='lname' placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-8">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-8">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone Number:</label>
                <div class="col-sm-8">
                <input type="phone" id="phone" class="form-control" name="phone" placeholder="Phone Number" required>
                </div>
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