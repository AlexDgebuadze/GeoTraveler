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
        <h1>REASONS TO VISIT GEORGIA – THE AMAZING EMERGING DESTINATION</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card2/intfacts.jpg"></div>
            <p>
            </p></div>
    </div>
    <div class="Mountains">
        <h1>Georgian food is the best?</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card3/food.jpg"></div>
            <p>
            Georgian food is hands down the best. This already is a solid reason why I keep returning to Georgia.

            We do have few Georgian restaurants and bakeries here in Warsaw too that I visit frequently but it’s still not as good as in Georgia.

            The best thing about the local cuisine is that, even if there are numerous meat dishes, vegetarians will be really happy there too. I know I am!

            I start each visit in Georgia with a real feast and the goodies I’m always most looking forward to are badrijani (fried eggplant with walnut sauce), khachapuri (cheese-bread), lobio (very thick bean soup), khinkhali (dumplings), ajapsandali (vegetable stew) and few more.

            But absolute favorite food in Georgia is just a simple salad made from cucumbers and tomatoes.
            </p>
    </div>
    </div>
    <div class="Mountains">
        <h1>Beautiful, diverse landscape</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card3/visit-georgia-102.jpg"></div>
            <div class="Mountainsimg"><img src="images/card3/visit-georgia-63.jpg"></div>
            <p>
            Georgian landscape is breathtaking and there is no exaggeration in this statement.<BR><BR>

            It’s a relatively small country but offers so much: Black Sea beaches (mostly full of stones but still decent enough to spend some relaxing time at), high Caucasus and lower lush mountains, incredible caves, green valleys and more.
            </p>
    </div>
    </div>
    <div class="Mountains">
        <h1>Long and turbulent history</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card3/visit-georgia-95.jpg"></div>
            <p>
            The area of Georgia was an important place already in the ancient world (then it was known as Colchis and Kingdom of Iberia) and for centuries it has been a strong an independent country.<BR><BR>

            The peak of prosperity happened between 11th and 13th century, especially when Queen Tamar ruled the country (until today she is a role model of many Georgian women but then how many badass queens you know from the history?).<BR><BR>

            Since the end of the 18th century Georgia was under the Russian rule, it was also part of the Soviet Union (btw, did you know that Stalin was born in Gori, Georgia and his full name was Ioseb Besarionis dze Jughashvili?).<BR><BR>

            On April 9th 1991 Georgia regained its independence but that’s when the turbulent history has started again – if you follow world’s news you might remember the civil war or the 2008 short war with Russia.<BR><BR>

            Now finally the peace and stability came to Georgia.
            </p>
    </div>
    </div>
    <div class="Mountains">
        <h1>Excellent wine</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card3/visit-georgia-27.jpg"></div>
            <p>
            While everyone is raving about wines from such exotic destinations like New Zealand, South Africa or Argentina it’s Georgian wine that deserves the attention.<BR><BR>

            Not only it’s really good, it also has a long history. Did you know that the wine was produced in the area already in the 6th century BC?<BR><BR>

            These days the main region to taste Georgian wine is Kakheti in the eastern part of the country, 75% of the production comes from there.<BR><BR>

            What’s more, you can get an excellent homemade wine just about everywhere, you can buy it in the restaurants or at local markets where they are sold in the Coca-Cola bottles (it’s actually part of the charm of the markets).
            </p>
    </div>
    </div>
    <div class="Mountains">
        <h1>Vibrant cities</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card3/visit-georgia-10.jpg"></div>
            <p>
            love the buzz in main Georgian cities.<br><br>

            All three of them: Tbilisi, Batumi and Kutaisi are busy, vibrant and worth a visit.<br><br>

            You should travel to Tbilisi to see beautiful yet crumbling capital with numerous Tbilisi attractions that will keep you occupied for at least 2-3 days. Old Tbilisi, the main touristic spot, looks like from a fairy tale really!<br><br>

            Batumi, the seaside resort, is more than just the beach and funky architecture. The city has a charming old town, amazing botanical garden, some good street art around and lush mountains surrounding the city.<br><br>




            Kutaisi is often overlooked by tourists but second biggest city in Georgia is worth your time too, it’s such a pleasant and offbeat destination.<br><br>

            These cities are a perfect example that Georgia is more than its beautiful nature.<br><br>
                        </p>
    </div>
    </div>
    <div class="Mountains">
        <h1>Interesting abandoned spaces</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/card3/visit-georgia-81.jpg"></div>
            <p>
            If you’re fan of exploring abandoned places and would like to visit places like Chernobyl (or maybe you’ve already been there) then Georgia might be an interesting destination for you.<br><br>

            Due to the recent conflicts and weak economy there are numerous places that once, in full glory, were impressing masses and now are decaying, forgotten by many.<br><br>

            The perfect example here is Tskaltubo, a former spa town located just a short ride away from Kutaisi.<br><br>

            Back in the golden times even Stalin used to come here for the treatment, now the fancy sanatoriums, a stunning example of Soviet architecture, are either abandoned or home to IDPs from Abkhazia.
            You can even find lots of old abandoned houses in the Old Tbilisi and even if they are slowly being renovated it still breaks my heart to see how damaged some of the beautiful houses are.

            But on the other hand they are part of Old Tbilisi’s charm…    
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