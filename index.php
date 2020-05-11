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
  <script type="text/javascript" src=""></script>
 
</head>
<body>
  <div class="container">

    <!-- Navigation -->
   <!-- <header>
        <nav class="header">
            <a href="#default" class="logo">CompanyLogo</a>
            <div class="header-right">
                <a class="active" href="#home">Home</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
        </nav>   
   </header> -->

   <header>
    <nav class="dt w-100 border-box pa3 ph5-ns">
        <a class="" href="index.php" title="Home">
          <img src="images/group One.png" class="dib w5 h5 br-100" alt="Site Name">
        </a>
        <div class="dtc v-mid w-75 tr">
            <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="About">About</a>
            <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="About">Services</a>
          <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="Store">Testimonials</a>
          <!-- <a class="link dim dark-gray f6 f4-ns dib grow" href="#" title="Contact">Admin</a> -->
          <a href="login.php"><button class="btn" type="button">Login</button></a>
        </div>
      </nav>   
      
    <!-- Welcome section -->
    <div class="tc welcome">
        <h1 class="f1">Welcome to OneDental Clinic!</h1>
        <p></p>
            <input type="sub" name="trial" value="MAKE AN APPOINTMENT">
    </div>
   </header> 



    <!-- Appointment-->
    <div class="mw9 center ph3-ns mt5 ">
      <div class="cf ph2-ns">
        <div class="fl w-100 w-40-ns pa2 pl4-ns">
          <div class="">
              <i class="flaticon-flag"></i>
              <h4 class="b">Emergency Cases</h4>
              <p class=""></p>
              <a class="f6 link dim br1 ba ph3 pv2 mb2 dib dark-green glow grow"><i class="fa fa-phone"></i> 1-800-123-4567</a>
          </div>
          <h4 class="">Available Dates</h4>
          <img src="images/calendar.png" class="w6 h5">

        </div>

        <div class="fl w-100 w-60-ns pa2">
          <aside class="pl6-ns">
            <p class="b black">Please fill the form and we will be in touch right away. Thanks</p>
            <div class="form">
              <form method="GET" name="myForm" onsubmit="return formValidation() ">
                <div class="form-field">
                  <input type="text" name="firstname" placeholder="First Name" required><br>
                  <span class="err-icon">&nbsp;</span>
                  <span class="err-msg">First name cannot be empty</span>
                </div>

                <div class="form-field">
                  <input type="text" name="lastname" placeholder="Last Name" required> <br>
                  <span class="err-icon">&nbsp;</span>
                  <span class="err-msg">Last name cannot be empty</span>
                </div>
              
                <div class="form-field">
                  <input type="email" name="email" placeholder="Email Address" required> <br>
                  <span class="err-icon">&nbsp;</span>
                  <span class="err-msg">Last name cannot be empty</span>
                </div>
                
                <div class="form-field">
                  <input type="number" name="Phone number" placeholder="Phone number" required> <br>
                  <span class="err-icon">&nbsp;</span>
                  <span class="err-msg">Please input your phone number</span>
                </div>
                
                
                <input type="subm" name="trial" value="BOOK AN APPOINTMENT">
                <h5><font color="gray">By clicking the button, you are agreeing to our </font> <font color="red">Terms and Services</font>By clicking the button, you are agreeing to our </font>></h5>
                
              </form>
            </div>
          </aside>
                  
        </div>
      </div>
    </div>
            


    

</div>
    <!--Footer-->
    <footer>
        <!--About-->
        <div>

        </div>
        <!--Hours-->
        <div>

        </div>

        <!--Links-->
        <div>

        </div>

        <!--Contact Info-->
        <div>
            
        </div>

    </footer>

    <footer class="pa4 pa5-l black-70 bt b--black-10">
      <section class="cf mb5">
        <!--Newsletter-->
        <!-- <div class="mb4 mb0-ns w-100 w-50-l fr">
          <a class="black-70 f3 f2-ns fw6 tl link dim dib pv3 mt2 mb4 mb0-l" href="mailto:hello@impossible.com" >
            hello@yourcompany.com
          </a>
        </div> -->
        <!-- <div class="mb4 mb0-ns fl w-100 w-50-l" >
          <p class="f4 fw6 mb2 f6 mt0">
            Sign up for our newsletter.
          </p>
          <input placeholder="Email Address" class="mw-100 w-100 w5-ns f5 input-reset ba b--black-20 pv3 ph4 border-box">
          <input type="submit" class="input-reset w-100 w-auto-ns bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray !important">
        </div> -->
      </section>

      <!--Footer-->
      <div class="mw-100 center ph3-ns bt b--black-10 pt1">
        <div class="cf ph2-ns">
          <div class="fl w-100 w-25-ns pa2">
            <img src="images/group One.png" class="dib w3 h3 br-100" alt="Site Name">
            <p>
          
            </p>
          </div>
          <div class="fl w-100 w-25-ns pa2">
            <h3 class="tc b">Opening Hours</h3>
            <ul class="opening-hours b">
              <li>Mon - Tues: <span class="pl3">9.00AM - 17.00PM</span></li>
              <li>Wednesday: <span class="pl2">9.00AM - 17.00PM</span></li>
              <li>Thursday: <span class="pl3">9.00AM - 17.00PM</span></li>
              <li>Friday: <span class="pl3">9.00AM - 17.00PM</span></li>
              <li>Saturday: <span class="pl3">Closed</span></li>
          </ul>
          </div>
          <div class="fl w-100 w-25-ns pa2 tc">
            <h3>Links</h3>
            <div class=" lh-copy">
              <a class="f4 fw4 db black link dim" href="#0">Home</a>
              <a class="f4 fw4 db black link dim" href="#0">Doctors </a>
              <a class="f4 fw4 db black link dim" href="#0">Appointments </a>
              <a class="f4 fw4 db black link dim" href="#0">Admin</a>
              <a class="f4 fw4 db black link dim" href="#0">Login</a>
                      
          </div>
          </div>
          <div class="fl w-100 w-25-ns pa2">
            
          </div>
        </div>
      </div>

      <!--Copyright & Social Media-->
      <div class="dt dt--fixed w-100" >
        <div class="dn dtc-ns v-mid">
          <p class="f7 black-70 dib pr3 mb3">
            Copyright © Group One (SOFT 7003) 2020
          </p>
        </div>
        <div class="db dtc-ns black-70 tc tr-ns v-mid">
          <a class="link dim dib mr3 black-70" title="Impossible Labs on Facebook">
            <svg class="db w2 h2" data-icon="facebook" viewBox="0 0 32 32" fill="currentColor">
              <title >facebook icon</title>
              <path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z"
              ></path>
            </svg>
          </a>
          <a" class="link dim dib mr3 black-70">
            <svg class="db w2 h2" data-icon="twitter" viewBox="0 0 32 32"
              fill="currentColor" >
              <title >twitter icon</title>
              <path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"
              ></path>
            </svg>
          </a>
          <a class="link dim dib mr3 black-70" title="Impossible Labs on Medium">
            <svg class="db w2 h2" x="0px" y="0px" viewBox="0 0 290 248.6"
              fill="currentColor" >
              <g >
                <path fill="currentColor" class="st0" d="M287.8,46.3L196,0.3c-0.4-0.2-0.9-0.3-1.3-0.3c0,0-0.1,0-0.1,0c-1.1,0-2.2,0.6-2.8,1.5l-56.6,92l63.2,102.7 l90.4-146.9C289.4,48.3,289,46.8,287.8,46.3z"
                ></path>
                <polygon fill="currentColor" points="105.2,61.2 105.2,160.3 193.3,204.4 	"
                ></polygon>
                <path fill="currentColor" d="M201,208.2l80.9,40.5c4.4,2.2,8,0,8-5v-180L201,208.2z"
                ></path>
                <path fill="currentColor" d="M95.5,46.7L10.7,4.3L5.4,1.7C4.6,1.3,3.8,1.1,3.2,1.1c-0.9,0-1.7,0.4-2.3,1.1C0.3,2.8,0,3.8,0,5v193.4 c0,3.3,2.4,7.2,5.4,8.7l83.3,41.6c1.2,0.6,2.3,0.9,3.3,0.9c2.8,0,4.8-2.2,4.8-5.8V48.7C96.7,47.8,96.2,47.1,95.5,46.7z"
                ></path>
              </g>
            </svg>
          </a>
          <a class="link dim dib black-70">
            <svg class="db w2 h2" x="0px" y="0px" viewBox="0 0 48 48" >
              <linearGradient gradientUnits="userSpaceOnUse" x1="23.9995"
                y1="0" x2="23.9995" y2="48.0005" >
                <stop offset="0" ></stop>
                <stop offset="1" ></stop>
              </linearGradient>
              <path fill="currentColor" d="M48,42c0,3.313-2.687,6-6,6H6c-3.313,0-6-2.687-6-6V6 c0-3.313,2.687-6,6-6h36c3.313,0,6,2.687,6,6V42z"
              ></path>
              <g >
                <g >
                  <path fill="#FFFFFF" d="M15.731,11.633c-1.608,0-2.658,1.083-2.625,2.527c-0.033,1.378,1.018,2.494,2.593,2.494 c1.641,0,2.691-1.116,2.691-2.494C18.357,12.716,17.339,11.633,15.731,11.633z M13.237,35.557h4.988V18.508h-4.988V35.557z M31.712,18.748c-1.595,0-3.222-0.329-4.956,2.36h-0.099l-0.087-2.599h-4.417c0.065,1.411,0.074,3.518,0.074,5.52v11.529h4.988 v-9.854c0-0.46,0.065-0.919,0.196-1.248c0.328-0.919,1.149-1.871,2.527-1.871c1.805,0,2.527,1.411,2.527,3.479v9.494h4.988V25.439 C37.455,20.713,34.993,18.748,31.712,18.748z"
                  ></path>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="db dn-ns">
        <p class="f7 black-70 mt4 tc">
          Copyright © Your Company 2038
        </p>
      </div>
    </footer>
</body>
</html>