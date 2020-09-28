<?php
session_start();
 ?>

<!doctype html>
<html>
    <head>
            <title>Contact US</title>
            <link rel="stylesheet" type="text/css" href="foodex.css">
            <link rel="stylesheet" type="text/css" href="about_us_css.css">
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
                    <p><a href="#about_us.php">About Us</a></p>
                <p><a href="contact-us.php">Contact US</a></p>
                </div>
                <div id="headercontent-right">
                    <p class="logout"><a href="login.php">Logout</a></p>

                </div>
                </div>
            </div>
            
    <!-- contact us -->
    <div id="contact-us">
            <h1 style="text-align:center";> Contact Us</h1>
                  <div id="book-form">

                                <h1 style="font-weight:800;">Want To Get In Touch With Us?</h1>
                                <p >Please complete the fields below and we'll get back to you as soon as possible.</p>
                        
                            <form>
                                    <center id="form-group">
                                        <table>
                                            <tr><td><label for="name"> Name:</label></td>
                                                <td><input id="name" type="text" placeholder="Name" class="form-control" required></td></tr>
                                            <tr><td><label for="email"> Email:</label></td>
                                                <td><input id="email" type="text" placeholder="Email" class="form-control" required></td></tr>
                                            <tr><td><label for="phone"> Phone</label></td>
                                                <td><input id="phone" type="text" placeholder="Phone" class="form-control" required></td></tr>
                                            <tr><td><label for="subject" > Subject</label></td>
                                                <td><input id="Subject" type="text" placeholder="Subject" class="form-control" required></td></tr>
                                            <tr><td colspan="2"><textarea id="form-control" id="textarea" name="textarea" rows="6" placeholder="Your Message"  ></textarea></td></tr>
                                            </table>
                                    </center>


                                <button class="button1" type="submit" name="singlebutton" ><span style="font-weight:800">SUBMIT</span></button>

                            </form><br><br><br>
                      <center style="font-size:17.5px; padding-left:50px">
                        <h2 div="text-primary">Thank You For Visiting Our Website.</h2>
                        <p>We value your comments and suggestions. The information you provide will be used only to help us better serve you and will not be sold or shared for any other purpose.</p>
                        </center>
            </div>
        

            </div>
             <div id="about_us">
                    <br>
                    <br>
        <h1 style="text-align:center; margin-right:60px"> About Us</h1>
                    
            <div id="about_context" style="padding-left:15px;">
                            <h3 id="schedule-title" style="text_align:center">Foodex Opening Hours</h3>
                                <table id="timings" width=40%>
                                    <tr>
                                        <td>
                              <h5 >Monday - Friday</h5>
                                <p>11:00 AM to 3:00 PM
                                    <br>7:00 PM to 10:00 PM</p>
                                            </td>
                                        <td>
                                <h5>Saturday - Sunday</h5>
                                <p>11:00 AM to 3:00 PM
                                    <br>7:00 PM to 11:00 PM</p>
                                            </td>
                                    </tr>
                                </table>
                </div>
                <div id="contact_div">
                <table id="contact_table">
                <tr>
                    <th>Address:</th>
                    <td><p> Dawood University of Engineering and Technology, Near Mazar-e-Quaid, Karachi</p></td>
                    </tr>
                    <tr>
                    <th>Phone:</th>
                    <td><p> +33434232<br>+315556545</p></td>
                    </tr>
                    <tr>
                    <th>Email:</th>
                    <td><p> info@Foodex.com<br>nfo123@Foodex.com<</p></td>
                    </tr>
                
                </table>
                    </div>
                    <br>
                    <br>
                    <br>
                
  
                </div>
            </div>
        </body>
</html>

