<?php
session_start();
  function OpenCon()
  {
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "123";
  $db = "foodex0.1";
  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
  $username=$_POST["username"];
  $password=$_POST["password"];
  $_SESSION["name"] = $username;
  $query1 = "SELECT user_name , email FROM users WHERE user_name = '$username' AND password = '$password'";
  $run_q1=mysqli_query($conn,$query1);
  if (mysqli_num_rows($run_q1) > 0) {
     header('location:foodex.php');
   }
    else {
      echo "User not available, please register";
    }
}
  OpenCon();

 ?>
