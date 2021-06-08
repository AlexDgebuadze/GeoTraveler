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
        <h1>GEORGIA, THE CRADLE OF VITICULTURE</h1>
        <p>For generations, Georgia has proudly claimed the title of the birthplace of wine. The beloved Mother Georgia statue overlooking the capital city of Tbilisi holds a sword in one hand and a wine cup in the other—symbols of the Georgian people’s passionate defense of their freedom, alongside their warm hospitality.

            Archeological findings are now adding material evidence to support Georgia’s claim as the world’s oldest wine-producing country.</p>
            <h3>PREHISTORIC WINEMAKING ARTIFACTS</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/wine.jpg"></div>
            <p>In 2015, scientists studying the history of agriculture uncovered ancient clay vessels dating back 8,000 years at an archeological dig in southeastern Georgia. The Neolithic-era site is a joint project of the Georgian National Museum and the University of Toronto.

                Researchers analyzing the residue contained within the vessels—the remains of grapes and grape seeds—dated the material to 6000 BCE. This establishes ancient Georgia as the first known location of grape winemaking.
                
                Georgian winemaking practices existed 3,000 years before the invention of writing and 5,000 years before the start of the Iron Age.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>LONGEST UNINTERRUPTED WINEMAKING TRADITION</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/wine.jpg"></div>
            <p>Situated at the crossroads of Europe, Asia, and the Middle East—and enjoying a climate and terrain perfectly suited for the cultivation of grapes—ancient Georgia supplied wines and vines to the first cities of the Fertile Crescent: Babylon and Ur.

                Georgia’s location has made it vulnerable to a host of adversaries throughout history.
                
                Assyrians, Greeks, Romans, Persians, Mongols, Arabs, and Turks have all invaded Georgia over the centuries (and neighboring threats remain even today). Assyrian kings, who demanded tribute from conquered peoples in the form of gold, made one exception: Georgians could pay their tribute in wine.
                
                While ancient civilizations like Egypt and Greece developed wine cultures of their own, all owe a debt to Georgian viticulture. The ancient Greek writings of both Homer and Apollonius of Rhodes include mentions of Georgia’s traditions of vine growing and winemaking.
                Many of the vines cultivated in Europe and Asia today are known to have Georgian origins. The Western words for wine—vin, vino, wine, and others—likely come from the Georgian word ghvino (or gvino).

                Repeated assaults drove Georgians to flee their vineyards for safe haven. But the practice of saving saplings for cultivation in new locations has protected the vines—and Georgia’s people—from oblivion. Entire dynasties have come and gone while the people of Georgia have continued making wine.

                It is that enduring spirit of the Georgian people that infuses the wines they’ve produced, uninterrupted, generation after generation.
            </p>
            </div>
    </div>
    <div class="Mountains">
        <h3>AN EMERGING ARTISANAL WINE CENTER</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/wine.jpg"></div>
            <p>Winemaking has long been the engine of the Georgian economy, elevating the vine to a symbol of endurance, rebirth, and prosperity. Shared fervor for the grape continues as winemakers explore new markets, reexamine centuries-old terroirs, and carve out a new place for their wines on the world stage.

                As the Georgian wine revival gathers steam, today’s local winemakers are harnessing their national heritage to produce some of the world’s most distinctive wines. In the process, they’re transforming into an emerging artisanal powerhouse—tying wine’s deep past to a dynamic future.</p>
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