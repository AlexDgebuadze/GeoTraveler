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
        <h1>Mountains Of Georgia</h1>
        <p>This small country in the Transcaucasia is strongly associated worldwide with the mountains. The mountains are the hallmark of Georgia that is as majestic, freedom-loving and unapproachable country as its amazing peaks. In this article, we offer to get acquainted with the most remarkable mountain peaks of Georgia.</p>
        <h3>Kazbek</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>Mount Kazbek is the most famous and loved mountain peak by tourists. By its height, Kazbek only takes the 3rd place in Georgia (5033 meters) and the 7th among the peaks of the Great Caucasus, but despite this, Kazbek stands out as the symbol and hallmark of Georgia. According to geoscientists Kazbek was once an active volcano, which decayed by long before the Georgian statehood. Climbing and hiking to Kazbek are extremely popular among tourists and travellers first of all because of its easy accessible area: to enjoy the mountain and the magnificent scenery you only need to take just a two-hour trip from Tbilisi along the picturesque Georgian Military Highway. It is believed that to see the top of the old giant is a great success because usually it is hidden behind the clouds. At the foot of the mountain, there is located the village of Stepantsminda, former Kazbegi, 10 km from which lies the Russian-Georgian border. Travellers can climb to the most favourite and must-visit touristic sights – the Gergeti Trinity church located on a smaller peak at the foot of Mount Kazbek, which offers spectacular and breathtaking views of the surrounding area. The church is notable for the fact that there had once been kept the cross of St. Nino – enlightener of Georgia. And the most desperate fans of extreme sports can climb through the eternal glaciers and permafrost to the top, which usually takes 2-3 days. On the way to the top, at an altitude of 4100 meters, you should definitely make a stop at the famous and unique monastery of Betlemi (4-5 century AC), carved into the rock. In fact, this Monastery is a cave, the walls of which are painted images of saints. Many legends are connected with the Betlemi monastery, which is considered by far the most high-mountain Christian church in the world.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Ushba</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>The peak of Ushba is located in Upper Svaneti and is considered one of the most renowned peaks of the Greater Caucasus, despite its relatively diminutive size, which is about 4700 meters. This mountain is surrounded by an aura of mystery and majesty. Ushba is translated from Svan dialect as “bringing trouble”, and in Georgian, it means “witches sabbath”. Ushba has 2 spiky granite peaks covered with snow and glaciers. No accident that the mountain got its name: from the perspective of mountaineering Ushba is considered extremely difficult. Many climbers have said goodbye to life during trips, which is why it is also known as a mountain-killer. At the foot of the mountain, the centre of Svaneti Mestia is located. This is a unique in-kind settlement, which preserved medieval Svan houses with watchtowers, included in the UNESCO World Heritage List.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Shkhara</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>Another well-known and the highest point of Georgia – Shkhara, is also located in the region of Upper Svaneti. Shkhara has 3 peaks, the highest of which is approximately 5200 meters. Translated from the Georgian Shkhara means “striped mountain”. Shkhara as Ushba is a technically difficult mountain, only experienced climbers with professional equipment are able to conquer it. If you are not a professional climber, do not despair. We encourage you to visit the village Ushguli – the second-highest mountain village of Europe and combine business with pleasure. Ushguli, like all Svan community, is known for its unique towers preserved from the Middle Ages.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Tetnuld</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>Finally, we reached the third highest peak of Svaneti Tetnuld. Its height is 4870 meters. The mountain’s name means “white top”.  Tetnuld’s peak is almost always hidden by fog. There is a beautiful legend according to which Ushba falls in love with Tetnuld but Tetnuld being very shy always hides her face in the mist, like a blanket.

                On the slopes of Tetnuld, the Georgian government has planned and has already successfully launched the construction of the new modern ski resort Tetnuldi. Tetnuldi must attract thousands of winter sports enthusiasts thanks to its unique virgin slopes and great opportunities for freeriding in the vast expanses of uninhabited mountains.</p>
            </div>
    </div>
    <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/Tbilisi-night.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/Tbilisi-view-1.jpg"></label>
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