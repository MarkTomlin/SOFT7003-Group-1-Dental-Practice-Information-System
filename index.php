<!DOCTYPE html>
<?php
	session_start(); ?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Dental Info System</title>

</head>
<body>
  <h1>Dental Practice Information System</h1>
  <br /><br /><br /><br />

  <div>
    <form method="post" action="login.php">
        <div>
            <div>
                <label for="email">Email:</label><br />
                <input id="email" type="text" class="validate" name="email">
            </div>
        </div>
        <br />
        <div>
            <div>
                <label for="password">Password:</label><br />
                <input id="password" type="password" class="validate" name="password">
            </div>
        </div>
        <br />
        <button type="submit" name="action">Login</button>
    </form>
  </div>
</body>
</html>