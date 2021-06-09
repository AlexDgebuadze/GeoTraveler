<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AboutGeorgiaNatureStyle.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Mountains+of+Christmas&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
    <NAV>
        <div class="logo">
            <a href="index.php"><h3>GeoTraveler</h3></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php"> Main </a></li>
            <li><a href="destination.php"> Destination </a></li>
            <li><a href="PlanYourTrip.php"> Plan Your Trip </a></li>
            <li><a href="AboutGeorgia.php"> About Georgia </a></li>
            <li><a href="contactus.php"> Contact Us </a></li>
            <li>
            <?php
            
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
               echo ' <li> <a style=\'color : white\' href="userProfile.php">   My Account  </a>  </li>'; 
               echo ' <label id="LoginF" for="show" class="show-btn"><a style=\'color : black; background-color: white;\' href="logout.php">   Logout  </a></label>';
            }else{
                echo ' <label id="LoginF" for="show" class="show-btn"><a style=\'color : black; background-color: white;\' href="loginForm.php">   Login  </a>  </label>  ';
            }
            ?>
            </li>

        </ul> 
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </NAV>
    <!-- ბურგერ მენიუს სკრიპტი -->
    <script src="js/burger.js"></script>
    <div class="Mountains">
        <h1>Georgian food and cuisine – top 10 Georgian dishes</h1>
        <p>Situated at the crossroads of East and West, Georgia has fallen within the orbit of many cultural influences and empires. One of the earliest Christian civilizations, Georgia has endured its share of invasions and Georgian food is well reflective of its past. In the times of peace, as merchants carried goods and spices along the Great Silk Road, Georgians embraced new seasonings and methods, adopted and incorporated foreign ingredients and styles into their own. Throughout the centuries, Georgian food has been influenced by the Mediterranean world, Arab and Mongol flavours, Persian and Ottoman kitchens, the link stretching as far as Northern India. Today’s Georgian food and cuisine is a rich interplay between Mediterranean and Middle Eastern tastes. Georgian food and wine culture is best observed through Supra – traditional feast featuring a wide array of assortment of dishes always accompanied by large amounts of wine, lasting several hours.</p>
        <h3>1. Khinkali</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/khinkali.jpg"></div>
            <p>Khinkali is a popular dumpling made with a variety of fillings. In the mountains, this much praised dish is made with lamb, which comes in abundance, elsewhere, mixture of minced beef and pork is used. The origins of Khinkali can’t precisely be traced; some accounts point to Tatar influence, others claim khinkali to be an indigenous product of Georgia’s primordial mountain culture.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>2. Khachapuri</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/khachapuri.jpg"></div>
            <p>No Georgian feast in ever complete without Khachapuri. According to many, it is the Georgian classic, cheese bread par excellence. It’s form, as well as texture vary from region to region: it can take a thin or thick crust, it can contain single or many layers, Khachapuri can assume round, triangle or rectangle form of all sizes and even come boat-shaped with an egg in the middle, as is the case of Khachapuri from Adjara – Georgia’s coastal region on the Black Sea.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>3. Mtsvadi</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/mtsvadi.jpg"></div>
            <p>A skewer of meat, be it veal, lamb or pork is symbol of true celebration à la géorgienne. While choice of meat varies from region to region and also according to seasons, the grilling method is more or less the same throughout. Out-of-age grapevine is considered to be noblest among the choice of wood. Once grilled, meat cubes are removed from skewers and shaken in a pot of thinly sliced onions and pomegranate juice. Sizzling meat slightly caramelizes the onions, while pomegranate juice forms a mild, acidy sauce with the meat juices.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>4. Georgian Cheese Plate: Sulguni, Smoked Sulguni, Guda</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/cheese.jpg"></div>
            <p>Georgians rely heavily on their cheese and each region makes its own variety. Sulguni, specialty of Western Georgia is perhaps the most admired semi-soft Georgian cheese. Its high moisture content is reminiscent of Mozzarella. Guda is a pungent mountain cheese from Tusheti, traditionally made with sheep’s milk and aged in sheepskin.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>5. Mixed Mushroom Stew in clay pot</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/soko.jpg"></div>
            <p>Georgian cuisine features a wide range of slow-cooked meat stews such as Kharcho or Chaqapuli (see below). While the meat remains a prime ingredient, some vegetarian versions are mastered increasingly, especially during the lent. Key mushroom variety is Khis Soko, cultivated on tree trunks. Its characteristics include distinctly strong flavour, wet woodland tones and firm texture, resistant to slow cooking.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>6. Kharcho with Gomi</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/kharcho.jpg"></div>
            <p>Kharcho is a slow-cooked thick meat stew with tomatoes, spices and aromatic herbs. Its distinctive aromatic feature owes largely to the use of Khmeli Suneli- a marigold rich Georgian counterpart of Indian curry blend. Gomi is a staple food of Samegrelo – region in the west and breeding ground for some of the most savory and elaborate dishes (Kharcho also originates from Samegrelo). For centuries Megrels made Gomi with millet – an indigenous crop to be subsequently replaced with maize, which proved to be more stable as a culture.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>7. Chaqapuli</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/chakaphuli.jpg"></div>
            <p>Compared to Kharcho, Chaqapuli is a light and liquid stew, redolent of springtime herbs, pungent with fruity flavors of white wine and tkemali sauce. (Tkemali sauce is an universal condiment made with wild plums and aromatic herbs). Although Chaqapuli echoes some similar dishes of neighboring Iran, such as Ghormeh Sabzi, this springtime stew, for many admirers captures the essential taste of Georgia.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>8. Assorted Pkhali</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/phkhali.jpg"></div>
            <p>Pkhali is a cold vegetarian appetizer, popular Georgian tapas. A mélange of spice-rich walnut paste, fresh herbs and vinegar is added to vegetables, fried or boiled. Pkhali is often garnished with pomegranate seeds, which enhances the mild acidity with a sour, fruity finish.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>9. Assorted Georgian pickles: Jonjoli, Peppers</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/jonjoli.jpg"></div>
            <p>Georgians enjoy wide variety of pickled vegetables, such as cucumber or courgette, ripe or unripe tomatoes and even leeks and garlic cloves. Most unfamiliar of these would perhaps seem pickled flowers of Jonjoli – a medium sized bush producing long stemmed flowers, which are harvested just before they flower in May and consumed throughout the year.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>10. Ricotta Cornets</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/cuisine/nadughi.jpg"></div>
            <p>These rolls provide a good example of how Georgians mix several dairy products together to come up with a tasty snack. Ricotta kneaded with mint is rolled into thin slices of Sulguni cheese to make these mildly salty, aromatic mint-mingled cornets.</p>
            </div>
    </div>
    <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/cuisine/khinkali.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/cuisine/khachapuri.jpg"></label>
        </div>
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/cuisine/mtsvadi.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/cuisine/cheese.jpg"></label>
        </div>
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/cuisine/soko.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/cuisine/kharcho.jpg"></label>
        </div>
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/cuisine/chakaphuli.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/cuisine/phkhali.jpg"></label>
        </div><input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/cuisine/jonjoli.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/cuisine/nadughi.jpg"></label>
        </div>
    </div>
    <footer class="footer">
        <div class="footercontainer">
            <div class="footerrow">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="">About Georgia</a></li>
                        <li><a href="">our services</a></li>
                        <li><a href="">privacy policy</a></li>
                        <li><a href="">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Plan Your Trip</h4>
                    <ul>
                        <li><a href="">Our Hotels</a></li>
                        <li><a href="">Destinations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>