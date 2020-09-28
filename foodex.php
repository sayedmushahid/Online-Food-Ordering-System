<?php
session_start();
 ?>

<!doctype html>
<html>
    <head>
            <title>foodex</title>
            <link rel="stylesheet" type="text/css" href="foodex.css">

    </head>
    <body>
        <div id="container">
              <img src="background.jpg" alt="foodex_backgroung" class="background_img" >
            <div id="header">
            <div id="subheader">
                <div id="logo">
                <img src="logo.jpg" alt="CNN" width="50px" height="50px">
                </div>
                <div id="headercontent-left">
                    <p><a href="foodex.php">Home</a></p>
                    <p><a href="Menus.php">Menu</a></p>
                    <p><a href="contact-us.php">About Us</a></p>
                    <p><a href="contact-us.php">Contact US</a></p>
                </div>
                <div id="headercontent-right">
                    <p class="logout"><a href="login.php">Logout</a></p>

                </div>
                </div>
            </div>
            <div id="backgroundtext">
              <p>Welcome <?php echo $_SESSION["name"]; ?> to FOODEX</p>
              <p>ORDER ANYTHING ANY TIME</p>
              <button type="button" name="button" class="button1" onclick="window.location.href = 'Menu1.php'">ORDER SOMETHING </button>
            </div>

</div>
    </body>

</html>

