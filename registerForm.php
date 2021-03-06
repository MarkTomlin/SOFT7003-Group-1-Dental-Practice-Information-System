<?php
  session_start();
	 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
      
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        
        <title>OneDental | No 1 Dental Clinic in Oxfordshire</title>
      
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
              //set page buttons to redirect to correct webpage on click - via EventListener
              var btn = document.getElementById('cancel');
              btn.addEventListener('click', function() {
                document.location.href = 'login.php';
              });
            }
            
        </script>
       
      </head>
<body>
<div class="container">
    <nav class="dt w-100 border-box pa3 ph5-ns">
        <a class="" href="index.php" title="Home">
          <img src="images/group One.png" class="dib w5 h5 br-100" alt="Site Name">
        </a>
        <div class="dtc v-mid w-75 tr">
            <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="About">About</a>
            <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="About">Services</a>
          <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="Store">Testimonials</a>
          <!-- <a class="link dim dark-gray f6 f4-ns dib grow" href="#" title="Contact">Admin</a> -->
          
        </div>
      </nav>
      <h1 class="nt3 tc">Welcome to OneDental</h1>
    

    <!-- Appointment-->
    <div class="mw9 center ph3-ns mt5 ">
      <div class="cf ph2-ns">
        <div class="fl w-100 w-40-ns">
          <img class="br4" src="images/dentist-examining-patient-s-teeth_1098-568.jpg"> 

        </div>

        <div class="fl w-100 w-60-ns pa2 mb1">
          <aside class="pl6-ns">
            <p class="fw9 green f4 nt4">Please enter your details to register Patient account</p>
            <div class="form mb2">
				<form method="POST" action="registerScript.php">
					<div class="form-field">
					<input type="fname" id="fname" class="form-control" name="fname" placeholder="First Name" style="width: 95%;
						padding: 15px 15px;
						margin: 5px 0;
						display: inline-block;
						border: 1px solid whitesmoke;
						border-radius: 4px;
						box-sizing: border-box" required> <br>
					<span class="err-icon">&nbsp;</span>
					</div>

					<div class="form-field">
					<input type="lname" id="lname" class="form-control" name="lname" placeholder="Last Name" style="width: 95%;
						padding: 15px 15px;
						margin: 5px 0;
						display: inline-block;
						border: 1px solid whitesmoke;
						border-radius: 4px;
						box-sizing: border-box" required> <br>
					<span class="err-icon">&nbsp;</span>
					</div>
				
					<div class="form-field">
					<input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required> <br>
					<span class="err-icon">&nbsp;</span>
					</div>
					
					<div class="form-field">
					<input type="password" id="password" class="form-control" name="password" placeholder="Password" style="width: 95%;
						padding: 15px 15px;
						margin: 5px 0;
						display: inline-block;
						border: 1px solid whitesmoke;
						border-radius: 4px;
						box-sizing: border-box" required> <br>
					<span class="err-icon">&nbsp;</span>
					</div>

					<div class="form-field">
					<input type="phone" id="phone" class="form-control" name="phone" placeholder="Phone Number" style="width: 95%;
						padding: 15px 15px;
						margin: 5px 0;
						display: inline-block;
						border: 1px solid whitesmoke;
						border-radius: 4px;
						box-sizing: border-box" required> <br>
					<span class="err-icon">&nbsp;</span>
					</div>

					<button type="button" id="cancel">Cancel</button><button type="submit" name="action">Register</button>
				</form>
				<br />
            </div>
          </aside>
                 
        </div>
      </div>
    </div>   
</div> 

</body>
</html>