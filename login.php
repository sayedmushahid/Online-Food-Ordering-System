<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="foodex.css" type="text/css">
    <title>Login</title>
  </head>
  <body>
    <div id="container">
      <img src="background.jpg" alt="foodex_backgroung" class="background_img">
      <form id="login_form" action="login_validation.php" method="post">
        <h1>Login</h1>
        <div id="inputs">
          <input type="text" name="username" id="box" placeholder="Enter Your Name" required><br>
          <input type="password" name="password" id="box" placeholder="Enter Your Password" required><br>
                  </div>
        <div class="sub_button">
          <button  type="submit" name="sub_button" id="sub_button">Login</button>
        </div>
        <div id="not_reg">
          <p>Not yet Registered?<a href="Registration.php"> click here</a> </p>
        </div>
      </form>
    </div>
  </body>
</html>
