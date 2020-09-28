<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="foodex.css" type="text/css">
    <title>Registration</title>
  </head>
  <body>
    <div id="container">
      <img src="background.jpg" alt="foodex_backgroung" class="background_img">
      <form id="sub_form" action="server.php" method="post">
        <h1>Register</h1>
        <div id="inputs">
          <input type="text" name="username" id="box" placeholder="Enter Your Name" required><br>
          <input type="email" name="email" id="box" placeholder="Enter Your Email Address" required><br>
          <input type="password" name="password" id="box" placeholder="Enter Your Password" required><br>
          <input type="password" name="confirm_password" id="box" placeholder="Please Confirm Your Password" required><br>
          <input type="text" name="address" id="box" placeholder="Enter Your Address" required><br>
          <input type="numbers" name="contact" id="box" placeholder="Enter Your contact number" required><br>
        </div>
        <div class="sub_button">
          <button  type="submit" name="sub_button" id="sub_button">Submit</button>
        </div>
        <div id="already_reg">
          <p>Already Registered? <a href="login.php"> login</a> </p>
      </form>
    </div>
  </body>
</html>
