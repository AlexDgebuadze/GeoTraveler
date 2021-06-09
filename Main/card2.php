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
        <h1>9 fun Georgia country facts you probably never knew</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/intfacts.jpg"></div>
            <p>
            </p></div>
    </div>
    <div class="Mountains">
        <h1>1. But first, where is it?</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/PA3JBGM-1024x576.jpg"></div>
            <p>
            Georgia sits at a strategic crossroads between Europe and Asia. Black Sea beaches and the soaring Caucasus Mountain Range are just some of the country’s natural charms.<BR><BR>

            But it is Georgia’s strategic location on the ancient Silk Road trade route, which has had neighbouring countries and empires eyeing the destination for centuries. <BR><BR>

            Turkey, Russia and the former Persian empire all wanted a slice of the Georgian cake. Later, Russia annexed the country in the 19th century. It was only much later that Georgia gained its independence from the Soviet Union. </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>2. The locals don’t call their country Georgia</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/Georgian-alphabet-1024x576.jpg"></div>
            <p>
            Peculiarly, the locals don’t call their homeland Georgia. The local Georgians refer to their country as Saqartvelo or საქართველო, in the local language. <BR><BR>

            The origins of the name Georgia are also largely unknown. One suggestion, however, is that, during the Middle Ages, Christians believed that St. George was the patron saint of the country. Evidently, the name stuck.
        </p></div>
    </div>
    <div class="Mountains">
        <h1>3. It’s home to one of Europe’s oldest cities</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/church.webp"></div>
            <p>
            That city is Kutaisi, in the west of the country. Today it’s one of the oldest continuously inhabited cities in the world.<BR><BR>

A very long time ago, Kutaisi was the capital of the Kingdom of Colchis from the second millennium BC. Needless to say, the city has survived the ravages of time and conflict.
          </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>4. It’s the birthplace of wine</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/georgia.webp"></div>
            <p>
            Wine lovers rejoice! Georgian labels may not be lining your cellar, but the country is in fact considered the birthplace of wine. As far back as 8000 years ago, Georgians are said to have started producing wine, but in their own special way.<BR><BR>

            Word has it that the origins of their wine production were entirely accidental. Some lucky soul poured grape juice into a qvevri, an earthenware jar, and buried it in a shallow pit. The result? A glass or two of Georgia’s finest.<BR><BR>

            Today, UNESCO has included this ancient Georgian tradition of Qvevri winemaking on their Intangible Cultural Heritage of Humanity List.<BR><BR>

            Oenophiles best make a beeline for the Kakheti valley, where 70% of Georgian grapes are grown. 
          </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>5. Explore a 6000-room cave city</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/georgia1.jpg"></div>
            <p>
            Move over Cappadocia. Georgia has its own other-worldly cave town: Vardzia, a fortress-monastery-palace complex carved out of and under the Erusheti Mountain in the south.<BR><BR>

            In the 13th century, Georgia’s Queen Tamar ordered the construction of the site as a refuge against the raiding Mongol Empire. <BR><BR>

            Upon completion, it boasted a staggering 13 levels of 6000 rooms (complete with bakery, church and wine cellars), a self-sustaining irrigation system and royal apartments. Sadly, just a century later, an earthquake destroyed more than two-thirds of the city.<BR><BR>

            The good news, however, is that visitors can today explore the still-intact parts of the underground city. Don’t forget your camera – it’s truly remarkable. 
          </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>6. A trio of UNESCO World Heritage sites</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/trio.webp"></div>
            <p>
          </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>7. The Georgian language is used nowhere else on earth</h1>
        <div class="MountainContent">
            <!-- <div class="Mountainsimg"><img src="images/card2/road_signs.jpg"></div> -->
            <p>
            It may be the official and primary language, but learning how to say hello and thank you in Georgian won’t get you far anywhere else in the world.<BR><BR>

            Georgian has many different dialects and its alphabet is unique to anything else you’ll see internationally. Like the rest of Georgia, it is ancient and dates back to the mid-4th century. This is a tough one to wrap your tongue around, but take heart in the fact that many young Georgians speak English better than Russian.
          </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>8. It’s ecologically diverse</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/eco.webp"></div>
            <p>
            Another of our favourite fun facts about Georgia is that it earns a spot amongst the world’s most ecologically diverse regions. The country’s 12 climate zones have spawned an incredible diversity of landscapes and wildlife.<BR><BR>

            Outdoors enthusiasts will adore an opportunity to hit the ski slopes and hike canyons, while wildlife lovers can spot wolves, lynx and bears in the forest.
          </p>
        </div>
    </div>
    <div class="Mountains">
        <h1>9. And speaking of the ski slopes…</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/winter.jpg"></div>
            <p>
            Move over Swiss Alps. Georgia’s premier ski resort, Gudauri, has become a hotspot for heli-skiing. 

            If you’re looking for a powder rush away from the crowds, head up high in Georgia, one of Europe’s most underrated ski destinations.
          </p>
        </div>
    </div>
    <!-- <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/Tbilisi-night.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/Tbilisi-view-1.jpg"></label>
        </div>
    </div> -->
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