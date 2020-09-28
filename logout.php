<?php
session_destroy();
unset($_SESSION['name']);
header("location:login.php");
 ?>
