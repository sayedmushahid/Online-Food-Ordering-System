<?php
session_start();
 ?>

<!doctype html>
<html>
    <head>
            <title>foodex</title>
            <link rel="stylesheet" type="text/css" href="foodex.css">
            <link rel="stylesheet" type="text/css" href="menu_css.css">
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
                    <p><a href="Menu1.php">Menu</a></p>
                    <p><a href="#about_us">About Us</a></p>
                <p><a href="contact-us.php">Contact US</a></p>
                </div>
                <div id="headercontent-right">
                    <p class="logout"><a href="login.php">Logout</a></p>

                </div>
                </div>
            </div>

            <table id="menu_table" width="90%">
            <tr><td colspan="4"><div id="menu_type">
                <p>Packages</p>
            </div></td></tr>
            <tr><td colspan="3"><marquee>
                <h3>Lunch Pack</h3>
                <div id="dish-meta">Soup / Starter / 1 biryani/lal karhai or <br></div><strong >(Raita , Ice Cream will be Served Limited)</strong> 
                </marquee></td></tr>
            <tr><td colspan="4"><div id="menu_type">
                <p>Starter</p>
            </div></td></tr>
            <tr><td><img id="dish_pic" src="pics/kabab.jpg"alt="kabab"><br>
                <p>Normally made of beef meat, with paste of lentils and chopped onion and coriander and green chillies usually added to the mixture,known as Dam Kabab.</p>
                <p>Price: 90RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/cheese balls.jpg"alt="kabab"><br>
                <p>These rice balls are stuffed with mozzarella and served with warm marinara sauce. It compliments tea time sank and also a perfect appetizer for date night dinner.</p>
                    <p>Price: 150RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/veg crispy.jpg"alt="kabab"><br>
                <p>The taste and texture is very similar to manchurian recipe but has the extra crisp because of the corn flour batter.</p>
                    <p>Price: 200RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                </tr>
                
                <tr><td colspan="4"><div id="menu_type">
                <p>Salad</p>
            </div></td></tr>
            <tr><td><img id="dish_pic" src="pics/veg salid.jpg"alt="kabab"><br>
                <p>This is a delicious salad, and it does have an Israeli feel to it. The overall flavor reminds me a little bit of Fatoosh. I wouldn't have thought to put dill and basil together, but they complement this wonderfully crunchy salad beautifully.</p>
                <p>Price: 250RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/cheese salid.jpg"alt="kabab"><br>
                <p>Directions In a large bowl, combine the lettuce, bacon, onions, cheeses and pimientos. In a small bowl, whisk the oil, cider, sugar, garlic powder, salt and pepper. Pour over salad; toss to coat.</p>
                    <p>Price: 250RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/fruit salad.jpg"alt="kabab"><br>
                <p>Common ingredients used in fruit salads include strawberries, pineapple, honeydew, watermelon, grapes, and kiwifruit.</p>
                    <p>Price: 250RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                </tr>
                
                <tr><td colspan="4"><div id="menu_type">
                <p>soup</p>
            </div></td></tr>
            <tr><td><img id="dish_pic" src="pics/mine.jpg"alt="kabab"><br>
                <p>Minestrone is a hearty Italian vegetable soup made with tomato-y broth and pasta or riceCommon ingredients include beans, onions, celery, carrots, stock, and tomatoes.</p>
                <p>Price: 90RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/tomato soup.jpg"alt="kabab"><br>
                <p>Combine butter, onion, and tomatoes. Grab a Dutch oven or pot, place it over medium heat and melt the butter. Add half an onion that’s been cut into large wedges and a large can of tomatoes.</p>
                    <p>Price: 150RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/thy soup.jpg"alt="kabab"><br>
                <p>This special Thai soup is based on an ancient recipe, where rice, fish, and vegetables are the common local ingredients. It is a fiery-hot soup with both sour and sweet overtones that make for a lively combination.</p>
                    <p>Price: 200RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                </tr>
                
                    <tr><td colspan="4"><div id="menu_type">
                <p>Chinese Dishes</p>
            </div></td></tr>
            <tr><td><img id="dish_pic" src="pics/chowmein.jpg"alt="kabab"><br>
                <p>how mein dishes include meat such as chicken, beef or shrimp which are stir fried with vegetables. The vegetables include carrots and celery.</p>
                <p>Price: 90RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/fried rice1.jpg"alt="kabab"><br>
                <p>Fried rice is made from steamed rice stir-fried in a wok, often with other ingredients, such as eggs, vegetables, and meat.</p>
                    <p>Price: 150RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/shashlik.jpg"alt="kabab"><br>
                <p>Traditionally Russian Shashlik is cooked on a long narrow open style bbq (without wire grills), called a mangal. Metal skewers are required, called shampuri.</p>
                    <p>Price: 200RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                </tr>
                
                      <tr><td colspan="4"><div id="menu_type">
                <p>Pakistani Dishes</p>
            </div></td></tr>
            <tr><td><img id="dish_pic" src="pics/biryani.jpg"alt="kabab"><br>
                <p>Ingredients vary according to the region the biryani is from and the type of meat used. Meat (of either chicken, goat, beef, lamb, prawn or fish) is the prime ingredient with rice.</p>
                <p>Price: 90RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/laal karhai.jpg"alt="kabab"><br>
                <p>Chicken karahi’s distinguishing features are its rich, tomatoey base and a fragrant finishing of green chili peppers, cilantro, and slivers of ginger.</p>
                    <p>Price: 150RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                <td><img id="dish_pic" src="pics/choly.jpg"alt="kabab"><br>
                <p>Chole Bhature is one of the tempting and flavorful dishes from Punjabi Cuisine. The union of Chickpea Curry and Fried Flatbreads is known as Chole Bhature.</p>
                    <p>Price: 200RS</p>
                <button id="sub_button">Order Now</button>
                </td>
                </tr>
            </table>
        
        
<!--        about us-->
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