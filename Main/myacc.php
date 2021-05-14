<?php
session_start(); 
          
require_once dirname(__FILE__).'/back-end/php/crud.php';
require_once dirname(__FILE__).'/back-end/php/user.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $result = $user->getUserbyUsername($_SESSION["username"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/myaccCSS.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->

    <title>GeoTraveler</title>
</head>



<body>
    <NAV>
        <div class="logo">
            <a href="index.php"><h3>GeoTraveler</h3></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php"> Main </a></li>
            <li><a href="#"> Destination </a></li>
            <li><a href="#"> Plan Your Trip </a></li>
            <li><a href="#"> About Georgia </a></li>
            <li><a href="contactus.php"> Contact Us </a></li>
            <li><label for="show" class="show-btn">Logout</label></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </NAV>
    <!-- ბურგერ მენიუს სკრიპტი -->
    <script src="js/burger.js"></script>
<div class="infobox">
    <div class="InfoContainer">
        <div class="textdiv">
            <div class="textdiv2" for="firstname">Name</div>
            <input type="text" class="form-control" value="<?php echo $result['name'] ?>" id="firstname" name="firstname">
        </div>
        <br></br>
        <div class="textdiv">
            <div class="textdiv2" for="surname">Surname</div>
            <input type="text" class="form-control" value="<?php echo $result['surname'] ?>" id="surname" name="surname">
        </div>
        <br></br>
        <div class="textdiv">
            <div class="textdiv2" for="mobile">mobile</div>
            <input type="text" class="form-control" value="<?php echo $result['mobile'] ?>" id="mobile" name="mobile">
        </div>
        <br></br>
        <div class="textdiv">
            <div class="textdiv2" for="mail">email</div>
            <input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">
        </div>
    </div>
    <div class="carddiv2" for="mail">Add Payment Card</div>
    <div class="carddiv">
        <div class="CardINFO">
            <div class="CardnameSurname">
                <input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">
                <input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">
            </div>
            <div class="ExpCV">
                <input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">
                <input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">
            </div>
            <input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">
            <button>Sumbit</button>
        </div>
    </div>
</div>
</body>