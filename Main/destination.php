<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/destinationstyle.css">
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
    <section class="destinationpage">
        <div class="pageheader">
            <h1>Destinations in Georgia</h1>
            <p>Explore outdoor and nature activities, cultural experiences,<br> coastal sailings and cruises in Georgia.</p>
        </div>
        <div class="headermap">
            <img src="./images//BIGGEORGIA.png" alt="">
        </div>
    </section>
    <div class="mainregmap">
        <div class="regmap">
            <div class="westmap map">
                <a href="west.php"><img src="./images/westgeorgia.png" alt=""></a>
            </div>
            <div class="westheader">
                <h3>Western Georgia</h3>
                <p>Western Georgia Western Georgia Western Georgia Western Georgia</p>
            </div>
        </div>
        <div class="regmap">
            <div class="eastmap map">
                <a href="east.php"><img src="./images/eastgeorgia.png" alt=""></a>
            </div>
            <div class="eastheader">
                <h3>Eastern Georgia</h3>
                <p>Eastern Georgia Eastern Georgia Eastern Georgia Eastern Georgia</p>
            </div>
        </div>
    </div>
    <div class="mainregmap">
        <div class="regmap">
            <div class="capital map">
                <a href="capital.php"><img src="./images/capitalgeorgia.png" alt=""></a>
            </div>
            <div class="capital">
                <h3>Capital of georgia</h3>
                <p>Capital of georgia Capital of georgia Capital of georgia Capital of georgia</p>
            </div>
        </div>
    </div>
</body>