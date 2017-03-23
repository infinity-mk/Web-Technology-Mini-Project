<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: ../eLECTRONICS/index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>LOGIN</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="" method="post">
    <input type="text" name="username" placeholder="Username" required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$">

    <input type="password" name="password" placeholder="Password" required pattern="[a-zA-Z0-9-_\.]{8,20}$">

    <input type="submit" name="submit" class="login login-submit" value="login">
  </form>

  <div>
    <span><?php echo $error; ?></span>
  </div>

  <div class="login-help">
    <a href="../register/register.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>
