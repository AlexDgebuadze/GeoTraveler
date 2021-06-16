<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&amp;display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital@1&amp;display=swap" rel="stylesheet">
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
    <!-- <div class="containter">
        <div class="banner">
        </div>
        <div class="title">
            <h1>EXPLORE GEORGIA</h1>
        </div>
    </div> -->
    <section class="videoheader">
        <video autoplay class="videobackground" muted plays-inline>
            <source src="./videos/bannervideo1.mp4" type="video/mp4">
        </video>
        <div class="hero">
            <div class="main">
                <div class="main-heading">
                    <h1 class="title2">EXPLORE GEORGIA</h1>
                </div>
                <!-- <a href="#" class="btn btn-gradient">Explore now
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a> -->
            </div>
        </div>
        <div class="title">
            <h1>EXPLORE GEORGIA</h1>
        </div>
    </section>
    <div class="spotlight">
        <h1>in the spotlight</h1>
    </div>
    <div class="cardcontainer">
        <div class="cardbox">
            <div class="thumb">
                <a href="card1.php"><img src="./images/culture.jpg" alt=""></a>
            </div>
            <div class="cardtext">
                <h2>Georgian Culture</h2>
                <p>Georgian culture is an exotic, mysterious and ancient culture stretching back for millennia.
                </p>
                <a href="card1.php"><button>Read More</button></a>
            </div>
        </div>

        <div class="cardbox">
            <div class="thumb">
                <a href="card2.php"><img src="images/card2/intfacts.jpg" alt=""></a>
            </div>
            <div class="cardtext">
                <h2>Fun Facts About Georgia</h2>
                <p>The birthplace of wine, a cave city and a unique alphabet – for these and other fun and interesting Georgia country facts
                </p>
                <a href="card2.php"><button>Read More</button></a>
            </div>
        </div>

        <div class="cardbox">
            <div class="thumb">
                <img src="./images/WEB_VAL_8985-1.jpg" alt="">
            </div>
            <div class="cardtext">
                <h2>Reasons to visit Georgia</h2>
                <p>From delicious food to hospitable people, from incredible landscape to vibrant cities – Georgia has it all!
                </p>
                <a href="card3.php"><button>Read More</button></a>
            </div>
        </div>
    </div>
    <section class="destinationsection">
        <div class="destinationheader">
            <h1>Destinations in Georgia</h1>
            <p>Explore outdoor and nature activities, cultural experiences,<br> coastal sailings and cruises in Georgia.</p>
            <a href="destination.php"><button>See Destinations</button></a>
        </div>
        <div class="destinationmap">
            <img src="./images/georgiabig.png" alt="">
        </div>
    </section>
    <div class="gallery">
        <a href="./images/Architecture.png" data-lightbox="mygallery" data-title=""><img src="./images/Architecture small.png" ></a>
        <a href="./images/architecture1.jpg" data-lightbox="mygallery" data-title=""><img src="./images/architecture1 small.png" ></a>
        <a href="./images/Bridge-of-Peace.jpg" data-lightbox="mygallery" data-title=""><img src="./images/bridge of peace small.png" ></a>
        <a href="./images/Georgia.jpg" data-lightbox="mygallery" data-title=""><img src="./images/georgia small.png" ></a>
        <a href="./images/gori1.jpg" data-lightbox="mygallery" data-title=""><img src="./images/gori small.png" ></a>
        <a href="./images/mcxeta1.jpg" data-lightbox="mygallery" data-title=""><img src="./images/mcxeta1 small.png" ></a>
        <a href="./images/mcxeta2.jpg" data-lightbox="mygallery" data-title="" ><img src="./images/mcxeta2 small.png" ></a>
        <a href="./images/Old-Tbilisi-1.jpg" data-lightbox="mygallery" data-title=""><img src="./images/oldtbilisi1 small.png" ></a>
        <a href="./images/Tbilisi-night.jpg" data-lightbox="mygallery" data-title=""><img src="./images/tbilisinight small.png" ></a>
        <a href="./images/Tbilisi-view-1.jpg" data-lightbox="mygallery" data-title=""><img src="./images/tbilisiview1 small.png" ></a>
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

<!-- 
<script src="js/login.js"></script> -->
</html>
