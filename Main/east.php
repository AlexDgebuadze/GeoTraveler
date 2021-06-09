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
            <h1>Eastern Georgia</h1>
        </div>
        <div class="westmap">
            <img src="images/eastgeorgia.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ab saepe possimus consectetur. Reprehenderit ex quod dolor 
                suscipit fuga hic dignissimos iure, saepe magnam, dolorem, 
                deserunt officia. Consequuntur odit sapiente maiores.</p> -->
        </div>
    </div>
    <div class="tbilisicontent" style="margin-top: 50px;">
        <div class="imgcontainer">
            <img src="images/east/mtskheta.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>MTSKHETA</h2>
            <p>
            One of the oldest cities in Georgia and the old kingdom’s capital for almost a millennium, Mtskheta is located just 20km from Tbilisi and is a popular day trip destination. It’s easy to reach by marshrutka or taxi in under an hour, and can be combined with a visit to Gori or used as a stopover on your way from east to west.<BR><BR>
            Mtskheta played a pivotal role in the evolution of Christianity in Georgia, and the small city is packed with important churches as a result. One of the nation’s three UNESCO World Heritage Sites, the Historical Monuments of Mtskheta, is located here and comprises a set of monasteries noted for their frescoes and inscriptions in an early version of the Georgian alphabet.<BR></BR>
            The 11th-century Svetitskhoveli Cathedral sits proudly in the middle of the city and gives Mtskheta its overall structure. Georgia’s second-largest religious building behind Sameba in Tbilisi, the location for the monumental structure is said to have been chosen by Georgia’s patron saint, St. Nino, herself. Georgia’s answer to Westminster, this is where kings were coronated and later laid to rest. At least 10 monarchs enjoy their eternal slumber beneath the heavy stone floor.<BR><BR>
            Jvari Monastery, built in the 6th century on a hill above Mtskheta, is a must-visit in Georgia. The church itself is quite modest inside, but the view from the churchyard – a stunning panorama of the confluence of the Mtkvari and Aragvi rivers, one blue and the other emerald – is simply breathtaking.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/east/gori.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>GORI</h2>
            <p>
            The birthplace of Joseph Stalin and home to the Stalin Museum, Gori has a reputation for being Georgia’s premier dark tourism destination. Visiting the museum – which includes Stalin’s birth house and armoured train carriage – is a trip to say the least, especially when you take the guided tour, which I highly recommend you do.<BR><BR>
            Stalin is certainly the city’s main claim to fame, but there’s a lot more to Gori than that. Once a pitstop on the Silk Road, Gori sits at the foot of a massive hill crowned with a distinctive stone fortress that cascades down towards the river’s edge. Climb to the top of the fortress for views over the plains of Shida Kartli region – or for even better views, venture further to Gori Jvari church, a short taxi ride or hike from town on the opposite bank of the river.<BR><br>
            Gori is a peaceful city with lots of parks, tidy streets, and trellises covered in vines dripping with grapes. The main street is lined with cafes and ice cream shops. Gori’s old town features some interesting brick architecture and backs onto a wonderful undercover produce market.<BR><BR>
            Set aside some time to visit the Great Patriotic War Museum, which documents the 2008 conflict that unfolded just a few dozen kilometres away and impacted the city profoundly.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/EAST/TELAVI.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>TELAVI</h2>
            <p>
            Telavi is the biggest city and main transport hub in Kakheti, Georgia’s humongous eastern region. It’s position in the Alazani Valley makes it a great base for travelling the Wine Route and visiting the many medieval monasteries, churches and castles that stud the Kakhetian countryside.<br><br>
            Telavi was the capital of the Kingdom of Kakheti from the 10th-12th centuries, and again in the 17th century. Historians often refer to it as the most ‘medieval’ city in Georgia because it’s the only place where monuments from four historical periods stand intact side by side. Put simply, Telavi is a history lover’s delight.<br><br>
            Telavi itself is a very pleasant, walkable city, with a cobbled Old Town featuring restored Kakhetian balconies and a buzzing undercover bazaar. One of the main attractions is the Giant Plane Tree, a 900-year-old specimen that’s the pride and joy of Telavi.<br><br>
            The mammoth Alaverdi Cathedral lies just outside Telavi’s city limits along with the ruins of the Ikalto Academy where Georgian literary hero, Shota Rustaveli, studied. Gremi, the former capital of Kakheti, is another point of interest.<br><br>
            Telavi has lots and lots of restaurants, wine bars and family run cellars to indulge in as well. It’s not as charming as Sighnaghi (the other hub in Kakheti which I’ll get to later), but it’s a convenient starting point for exploring all this region has to offer.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/EAST/SIGHNAGHI.JPG" alt="">
        </div>
        <div class="contentcontainer">
            <h2>SIGHNAGHI & KAKHETI WINE REGION</h2>
            <p>
            The walled city of Sighnaghi is the beating heart of Kakheti, Georgia’s most productive wine region. This is far from the only place where grapes grow (I’ll cover some of the alternative wine regions later), but it’s definitely the most popular place to do a wine tasting in Georgia, especially since it’s so close to Tbilisi.<br><br>
            Marketed as ‘the city of love’, charming little Sighnaghi is encased in stone city walls and ramparts that you can climb for stunning views over the valley, hemmed in by the Caucasus mountains beyond. The small museum dedicated to painter Pirosmani who was born in Sighnaghi is also worth a look in.<br><br>
            Beyond the town, dozens of traditional cellars and commercial wineries of varying sizes beckon visitors for guided tours and degustations. Qvevri wine, a traditional Georgian method that involves fermenting grapes in clay vessels buried underground, and more contemporary European wine-making techniques are both practiced. Join a day tour to visit a selection of popular wineries or hire a car and driver to cover the lesser-known gems on the Wine Route.<br><BR>
            If you don’t drink, the Alazani Valley is still one of the best places in Georgia to immerse yourself in local history and religion. For every winery, there’s also a monastery – some with spectacular hilltop locations, others sunken into the deepest depths of caves.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/east/kazbegi.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>KAZBEGI & GERGETI TRINITY CHURCH</h2>
            <p>
            Kazbegi (also known by its new name, Stepantsminda) is an alpine town in the Greater Caucasus, due north of Tbilisi and very close to the border with Russia. Perched on a hill above the town in the shadow of mighty Mount Kazbek sits Gergeti Trinity Church, the country’s most iconic cathedral and the poster child for Georgia tourism.<BR><BR>
            The high-altitude walled chapel is a sight to behold, especially when seen from afar against a dramatic backdrop of snow-capped, jagged peaks. You can hike up to the church from the town in around an hour via an ambling path<BR><BR>
            As the closest mountain region to Tbilisi (just under a 3-hour drive via the Georgian Military Highway), Kazbegi is an easy addition to even a short Georgia itinerary. Easy hikes to waterfalls, more beautiful monastery complexes (Dariali is particularly impressive) and the open-air thermal pools at Pansheti are also accessible from Kazbegi, while the town itself has some terrific restaurants that serve typical mountain fare.
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