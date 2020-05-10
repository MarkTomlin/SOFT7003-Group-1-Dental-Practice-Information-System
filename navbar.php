<?php 
  $ut = $_SESSION['user_type']; //set usertype to variable 
  $uti = $ut;
  $uti .= "Index.php"; //set variable to user index file
?>
<nav class="navbar navbar-light">
    <?php
      echo "<a href='/$ut/$uti' title='Home'>";
      echo "<img src='../images/group One.png' class='dib w5 h5 br-100' height='200' width='200' style='border-radius: 50%;' alt='Site Name'>";
      echo "</a>";
    ?>
    <div class="dtc v-mid w-75 tr" style="text-align: right">
      <img src="../images/user.png" height="62" width="62" alt="User icon">
      <h4 style="display: inline-block; text-align: right; padding-right: 10px; padding-left: 6px"><?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?></h4>
      <a href="../logout.php"><button class="btn btn-primary" type="button">Log Out</button></a>
    </div>
</nav>