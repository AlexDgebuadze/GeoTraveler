<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AboutGeorgiaNatureStyle.css">
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
        <h1>Fauna</h1>
        <h3>Red deer</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>The red deer, also known as Cervus elaphus, despite being one of the most beautiful inhabitants of Georgian forests, is nearly extinct in the country. Several subspecies of red deer exist, and one of them exclusively inhabits Georgia. The beautiful red deer can be found in the national reserves of Borjomi and Lagodekhi. Red deer were listed among Georgia’s endangered species as far back as the beginning of the 19th century.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Leopard</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>The leopard, now considered to be one of the rarest animals in the world, used to inhabit large swathes of Georgia’s territory many years ago. A number of Georgian folk tales is related to this predator. Unfortunately, leopards are on the brink of extinction; there are barely a few dozens left worldwide. One has recently been noticed in Vashlovani National Park, Georgia. Hunting this animal is strongly prohibited.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Caucasian tur</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>Caucasian tur is a mountain-dwelling caprine found only in the Caucasus. There are two types of turs: East and West Caucasian. These wild goats usually live in rough mountainous terrain and feed on alpine grass. Hunting them is strongly banned, since they are included into Georgia’s Red List. Caucasian turs are found in the regions of Lagodekhi,Kvareli, Telavi, Lentekhi, Mestia, Oni and in the mountains of Abkhazia.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Goitered gazelle</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>Goitered gazelle is another inhabitant of Georgia’s landscapes that is considered endangered. The goitered gazelle inhabits sands, gravel plains and limestone plateaus. In Georgia it could mostly be found in the eastern part of Shiraqi field, as well as Gardabani and Samgori fileds. Unfortunately, due to massive and uncontrolled hunting, the population of goitered gazelles was almost entirely devastated.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Striped hyena</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>The striped hyena is also listed as an endangered animal. In the 19th century, these animals were far more widespread than they are now, even dwelling around Tbilisi, the capital of Georgia. They mostly inhabited Makhata Mountain, Martkopi, Akhmeta and Shiraqi regions of the country. At present, remnants of striped hyena population can still be found in the vicinity of Alazani River’s bank, Black Mountain and Sarkliskuri areas. Their numbers have significantly decreased over the years.</p>
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
</body>