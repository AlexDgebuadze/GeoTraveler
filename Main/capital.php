<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/westStyle.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/capitalstyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <title>GeoTraveler</title>
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
    <div class="maincontent">
        <div class="headercontent">
            <h1>Capital of Georgia</h1>
        </div>
        <div class="westmap">
            <img src="images/capitalgeorgia.png" alt="">
            <p>Tbilisi in some languages still known by its pre-1936 name Tiflis is the capital and the largest city of Georgia, lying on the banks of the Kura River with a population of approximately 1.5 million people. Tbilisi was founded in the 5th century AD by Vakhtang I of Iberia, and since then has served as the capital of various Georgian kingdoms and republics. Between 1801 and 1917, then part of the Russian Empire, Tiflis was the seat of the Imperial Viceroy, governing both Southern and Northern Caucasus.</p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/capital/tbilisicapital.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>Tbilisi</h2>
            <p>When visiting Georgia, it’s mandatory to spend at least a couple of days in Tbilisi, the nation’s capital and hub for the arts, culture and food. Tbilisi’s history dates back to at least the 5th century and its position at the geographical and figurative crossroads of East and West has meant it’s always found a way to incorporate the best of both worlds.<br><br>
                Tbilisi lies in a valley ringed by mountains, each with a soaring cable car or funicular at the ready to whisk you away towards magnificent views. The medieval Narikala Fortress and Soviet-embellished Mtatsminda face off from opposing hills, standing guard over ancient churches, the domed bathhouses of Abanotubani, and modern marvels including the Bridge of Peace and Rike Concert Hall.<br><br>
                Tbilisi is a symphony of different religions, cultures and traditions. Synagogues, Orthodox cathedrals, Armenian churches and a mosque are all within shouting distance of each other, while old bazaars and merchant’s mansions allude to the city’s history as a trading hub.<br><br>
                Tbilisi is a city of details, so after a broad overview from afar, it’s time to take the streets with a magnifying glass. Hours can be spent examining the heritage buildings in the Old Town and in Sololaki, Tbilisi’s oldest neighbourhood.<br><br>
                Rove the vibrant Dezerter Bazaar for spices and churchkhela and the iconic Dry Bridge Market for vintage trinkets. Brush up on your history by visiting a few of Georgia’s most important museums and galleries, starting with the Soviet Occupation Hall at the National Museum, the Folklore Museum, and the Open Air Museum of Ethnography.<br><br>
                Tbilisi’s wine bars and Georgian restaurants showcase the best of the country’s fresh produce, regional cuisines and organic winemaking techniques. And beautiful boutiques and studios trade in handmade lurji supra blue tablecloths, cloisonne enamel and other beautiful objects to satisfy all your earthly desires.</p>
        </div>
    </div>
    <div class="todocontainer">
        <div class="todoinnercontainer">
            <h3>Sip coffee inside an old Soviet sewing factory</h3>
            <div class="imgcontainer">
                <img src="images/capital/Fabrika-Tbilisi-2-2.jpg" alt="">
            </div>
            <p>
                In a former life, Fabrika was a sewing factory—now it’s a multipurpose creative space and perhaps the best example of ‘industrial chic’ I’ve ever seen. The ground floor is a like a giant, light-filled lounge room, complete with a cafe/restaurant, mismatched sofas, and dozens of brightly coloured Caucasian rugs.<br><br>
                If you’re looking for a nice spot to relax and drink coffee, eat breakfast, get some work done or just experience Tbilisi’s creative side, I can’t recommend Fabrika highly enough.
            </p>
        </div>
        <div class="todoinnercontainer">
            <h3>The Dry Bridge Market</h3>
            <div class="imgcontainer">
                <img src="images/capital/P3287466.jpeg" alt="">
            </div> 
            <p>
                The Dry Bridge Market (so called because the bridge it’s staged on no longer runs over a river, but over landfill instead) is a huge open-air bazaar held in the area around Dedaena Park.<br><br>
                Quirky vendors convene here daily to pedal boundless quantities of antiques, vintage paraphernalia and Soviet kitsch, including war medals, propaganda posters, KGB ID books, gas masks, USSR maps, and Soviet-issue film cameras.<br><br>
                There are more vendors here on Saturdays and Sundays, so try to visit on the weekend to see the best range.
            </p>
        </div>
        <div class="todoinnercontainer">
            <h3>Overdose on khinkali</h3>
            <div class="imgcontainer">
                <img src="images/capital/EmilyLushTbilisiGeorgia-12.jpg" alt="">
            </div> 
            <p>
                We met many people on our travels (mainly Polish and Ukrainian) who had come to Georgia just for the food. I can totally symphathise. Georgian cuisine is notoriously decadent, heavy on carbs and cheese – but it can also be surprisingly fresh and flavoursome.<br><BR>
                    Your first meal in Tbilisi simply must feature a heaving platter of khinkali. One of Georgia’s national dishes, khinkali are slightly chewy, doughy dumplings filled with minced meat and herbs, or potato and cheese.<br><br>
                    There’s a special etiquette for eating khinkali, so you’d do well to read up before you try them. But don’t worry, a khinkali faux pas isn’t the end of the world. It’s all part of the fun!<br><br>
                    The only thing that beats mastering the art of khinkali-eating is having someone show you how to make them, too. We had the honour when our Airbnb hosts in Tbilisi invited us over for a Sunday afternoon khinkali-making session.
                </p>
        </div>
        <div class="todoinnercontainer">
            <h3>Wander the backstreets to find the best view of Tbilisi city</h3>
            <div class="imgcontainer">
                <img src="images/capital/Emily-Lush-Tbilisi-airport-1.jpg" alt="">
            </div> 
            <p>
                One thing Tbilisi is definitely not lacking is viewpoints. Funiculars and cable cars link Tbilisi’s low valley downtown with some of the best hilltop outlooks. But my favourite position, the spot where I took the photo above, can be reached on foot.<br><br>
                I would tell you where this photo was taken, but then I’d have to… Just kidding. Head up the hill from Abanotubani, towards Tabor Monastery of the Transfiguration, to find stellar views of Tbilisi Old Town and Narikala Fortress.<br><br>
                If you get lost on the winding backstreets, look out for the little handwritten blue and white signs. Or just ask one of the friendly residents to point you in the right direction.
            </p>
        </div>
        <div class="todoinnercontainer">
            <h3>Chill out at one of Tbilisi’s urban lakes</h3>
            <div class="imgcontainer">
                <img src="images/capital/Emily-Lush-Tbilisi-Georgia-2019-1.jpg" alt="">
            </div> 
            <p>
                When summer arrives in Tbilisi, locals flock to the lake. On our most recent visit, we were lucky enough to be invited for a weekend away at Sioni Lake, halfway between Tbilisi and Kazbegi. There are a few reservoirs and natural lakes closer to the city that locals love to escape to as well.<br><br>
                Lisi Lake is located on a high plateau overlooking eastern Tbilisi’s Saburtalo district. On a windy evening, the surface of the little lake is chopping with waves – it’s pretty incredible! There’s also a public bathhouse on the edge of the lake if you want to indulge in a sulfur bath and traditional scrub down.
            </p>
        </div>
        <div class="todoinnercontainer">
            <h3>See some incredible feats of concrete</h3>
            <div class="imgcontainer">
                <img src="images/capital/EmilyLushTbilisiGeorgia-10.jpg" alt="">
            </div> 
            <p>
                Tbilisi is an excellent city to explore on foot—which is why so many of my favourite things to do revolve around walking. Fans of concrete, Brutalism and Soviet-era architecture will find a lot to love about the city—including impressive mosaics and bas reliefs, whacky civic buildings and ‘Commieblocks’, and concrete monuments such as The Chronicles of Georgia.<br><BR>
                    If you’re serious about your concrete, there’s a special walking tour for that. If you’re on an independent hunt, the city’s metro stations are a good place to start.


            </p>
        </div>
        <div class="todoinnercontainer">
            <h3>Get scrubbed down at the Abanotubani sulfur baths</h3>
            <div class="imgcontainer">
                <img src="images/capital/EmilyLushTbilisiGeorgia-28.jpg" alt="">
            </div> 
            <p>
                When Tbilisi was established in the fifth century, the city was erected on top of a network of natural hot springs (according to some sources, the name ‘Tbilisi’ means ‘warmth’).<br><BR>
                    Abanotubani district provides some clues to the geothermal playground beneath Tbilisi’s surface—here, you can visit a small waterfall right in the heart of the city, and see beautiful Georgian-style balconied houses clinging dramatically to a rocky gorge.<br><br>
                    Abanotubani is also the location of Tbilisi’s famous domed bathhouses. Each one taps the precious sulfur water to offer a range of treatments that are excellent for one’s skin. If you’re up for a truly local experience, try visiting the communal public baths for a soak and a steam.<br><BR>
                        Some are open 24 hours. Alternatively, most bathhouses offer private rooms where you can bathe solo (or with a friend) and receive an exfoliating scrub down from a local masseuse.
            </p>
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