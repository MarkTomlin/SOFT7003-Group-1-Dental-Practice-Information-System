<?php
  //Start or resume existing web browser session
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    
    <title>OneDental | No 1 Dental Clinic in Oxfordshire</title>
  
    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">  
  
  </head>
<body>
  <div class="container">
    <!-- Navbar -->
    <nav class="dt w-100 border-box pa3 ph5-ns">
      <a class="" href="index.php" title="Home">
        <img src="images/group One.png" class="dib w5 h5 br-100" alt="Site Name">
      </a>
      <div class="dtc v-mid w-75 tr">
        <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="About">About</a>
        <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="About">Services</a>
        <a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="about.html" title="Store">Testimonials</a>
      </div>
    </nav>

    <!-- Content-->
    <div class="mw9 center ph3-ns mt5" style="text-align: center;">
        <h2>Login attempt has failed!</h2><br />
        <h4>Please confirm your email, password and try again</h4><br />
        <button><a class="link dim dark-gray f6 f4-ns dib mr3 mr4-ns grow" href="login.php">Back to Login</a></button>
    </div> 

      <!--Footer-->
    <footer class="pa4 pa5-l black-70 b--black-10 mt5">
      <div class="mw-100 center ph3-ns b--black-10 pt1">
        <div class="cf ph2-ns">
          <div class="fl w-100 w-25-ns pa2">
            <img src="images/group One.png" class="dib w3 h3 br-100" alt="Site Name">
            <h3>Wheatley Campus</h3>
            <h3>Oxford OX33 1HX</h3>
            <p class="b">1-800-123-4567</p>
            <p class="b">info@onedental.com</p>
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
              <a class="f4 fw4 db black link dim" href="index.php">Home</a>
              <a class="f4 fw4 db black link dim" href="about.html">Services </a>
              <a class="f4 fw4 db black link dim" href="login.php">Login</a>
                      
            </div>
          </div>
          <!-- Google map embed-->
          <div class="fl w-100 w-25-ns pa2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.108227384152!2d-1.129271748843237!3d51.74934450070556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876ea164a0ab725%3A0x25f245690f7953e2!2sOxford%20Brookes%20University%2C%20Wheatley%20Campus!5e0!3m2!1sen!2suk!4v1589127410101!5m2!1sen!2suk" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
              <path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 
              L19 30 L13 30 L13 18 L8 18 z"></path>
            </svg>
          </a>
          <a" class="link dim dib mr3 black-70">
            <svg class="db w2 h2" data-icon="twitter" viewBox="0 0 32 32"
              fill="currentColor" >
              <title >twitter icon</title>
              <path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 
              8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 
              20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"></path>
            </svg>
          </a>
        </div>
      </div>
    </footer>
  </div> 
</body>
</html>