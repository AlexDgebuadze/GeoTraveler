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
        <h1>Natural Reserves of Georgia</h1>
        <p>Georgia offers an amazing variety of natural landscapes. Here every tourist will be able to find activities and preferred type of holiday for any taste and wallet! Nature has generously bestowed Georgia with high mountain ranges, plains and dense evergreen forests, seas, rivers, and lakes. In this article, we want to introduce you to the natural reserves of the country, which will be interesting for the lovers of eco-tourism in particular. If you are tired of city life and want to find spiritual harmony in the lap of nature, then you should definitely visit the most famous natural reserves of Georgia described below.</p>
        <h3>Kazbegi</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/NatReserves/Kazbegi.jpg"></div>
            <p>Probably one of the most popular nature reserves in Georgia is the Kazbegi National Park, which is located 150 km from Tbilisi on the east side of the Greater Caucasus. Every year hundreds of tourists come here to enjoy the surrounding beauty. The reserve was founded in 1976, over time its territory has expanded, and now it covers approximately 9030 hectares. The flora in this region is diverse. 35 % of the reserve territory is covered by forests, where grow subalpine, birch, pine trees. Here you can find a rare birch tree Reddy, listed in the Red Book. The rest of the territory is covered by subalpine and alpine meadows. The fauna is equally diverse; there are many rare species of animals, also listed in the Red Book of Georgia. Here dwell foxes, brown bears, chamois, mountain goats and other animal species. You can get from the capital to the reserve by taking the bus which departs from Didube bus station.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Lagodekhi</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/NatReserves/Lagodekhi.jpg"></div>
            <p>The Lagodekhi Reserve is located at the base of the Central Caucasus Mountains on the border with Dagestan, near the eponymous village of Lagodekhi. The reserve is one of the oldest in the country. It was founded during the Imperial Russia period in 1912. According to its terrain and climate, Lagodekhi is unique: along with high mountain ranges with deep ravines and harsh climate, there can also be found plains with alpine meadows and dense broadleaf forests with warmer climates. The flora and fauna of the reserve are also rich: unique and rare species of animals and plants are accounted for here. The reserve territory is protected by the state and the access is possible only with a special pass for research.
                The administration of the reserve has set special routes which lead to the main attractions, for the lovers of trekking and eco-tourism.

                The 9.5 km long path leading to the six-meter high waterfall of “Racho”.
                The 8.5 km long trail to the waterfall of “Ninos Khevi” and the gorge of “Nino”.
                The 10.5 km long path to the castle of “Machi”.
                The trail to the Black Rocks lake 48 km long, the length of the tour is 3 days, also horse riding tour can be organized.
                “The trail of natural history” with the length of only 600 meters, designed specifically for children.
                You can reach the reserve either independently by taking a taxi or public transport, or within the framework of an organized tour. The road from Tbilisi will take approximately 3-4 hours. A trip by minibus to the village of Lagodekhi costs 8-10 GEL, by taxi about 100 GEL.
                            </p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Mtirala</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/NatReserves/Mtirala.jpg"></div>
            <p>Mtirala Reserve is located in Kobuleti, Adjara Autonomous Republic, approximately 300 km from Tbilisi. The National Park was established in 2006 to protect the vast “Colchis” forests. National Park covers an area of 6000 hectares and has a particular flora and fauna typical of the rainforests. Its administrative centre is located in a small neighbouring town called Chakvi.
                The landscape of the park was formed under the influence of volcanic lava flows and lush plant life. The area has the highest humidity level not only in Georgia but also throughout Europe: here rainfall exceeds 3000-4000 mm per year. That is why the locals have named the area “Weeping Mountain” because of the abundance of rain and as a result of fog. The reserve is rich in a number of different sub-tropical plants; here you can also find 96 animal species, 23 of which are included in the Red Book of Georgia. The reserve is famous for its healing mineral and crystal-clear springs. Visitors can observe the life of animals and birds, make research eco-tours, and arrange boat trips, horse riding or just hiking to the picturesque waterfall or to the old authentic village. Of course, the biggest attraction of the park is its stunning scenery and natural beauty. 
            </p>
            </div>
    </div>
    <div class="Mountains">
        <div class="MountainContent">
            <h3>Sataplia</h3>
            <div class="Mountainsimg"><img src="images/NatReserves/Sataplia.jpg"></div>
            <p>Sataplia State Nature Reserve was formed in 1935 to protect rare paleontological sites and unique flora. The creation of reserve was aimed at the conservation and restoration of natural and cultural values of the region: the archaeological monuments and unique natural treasures. The reserve is located near the city of Kutaisi, on the eponymous mountain “Sataplia” which in Georgian means “honey” (tapli), as this place once was renowned for its bees and honey. The reserve territory is mainly covered by evergreen broadleaf forests that grow so densely that the sunlight barely passes. The reserve is located at 500 meters above sea level, so the subtropical climate is typical to this region.
                Sataplia Reserve is widely known for its unique karst caves. The caves were formed thousands of years ago due to the leaching of rocks and had extended for kilometres, forming a variety of which resemble a real underground kingdom. The cave of Sataplia stretches for a kilometre, where you can find stalactites and stalagmites of fantastic shapes, resembling stone waterfalls or candles. It should be noted that for travellers may advance only for 300 meters deep into the cave. Inside the cave is decorated with coloured lights that automatically take you to the world of imaginations. You definitely need to do some impressive and memorable shots! In the centre of the cave, there is an unusual stalagmite having a heart shape. According to legend, if you touch it with a hand and make a wish, it will certainly come true.

                To visit all the attractions one day will be enough. During the one-day tour, we recommend you to visit important historical and cultural sites nearby, such as the Gelati Monastery (12th century) and the Church of Bagrat (10th century).  
            </p>
            </div>
    </div>
    <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/NatReserves/Kazbegi.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/NatReserves/Lagodekhi.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/NatReserves/Mtirala.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/NatReserves/Sataplia.jpg"></label>
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