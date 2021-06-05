<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start(); 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
$hotelid = $_GET['hotelID'];
$roomid = $_GET['roomID'];
$roomPics = $crud->getRoomPics($hotelid,$roomid);
$roomInfo = $crud->getRoom($hotelid,$roomid);
$result = $roomInfo->fetch(PDO::FETCH_ASSOC);
}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('loginForm.php'); </script>";

}


if(isset($_POST['submitt'])){
$_SESSION["roomid"] = $roomid;
$_SESSION["hotelid"] = $hotelid;    
$_SESSION["checkin"] = $_POST["checkIn"];
$_SESSION["checkout"] = $_POST["checkOut"];
session_start();
header("location: PaymentForm.php");

}    



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plan Your Trip</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/PlanYourTripFrontCSS.css">
    <!-- <link rel="stylesheet" href="css/roomStyle.css"> -->
    <link rel="stylesheet" href="css/bookroomstyle.css">
</head>
<body>
    <div class="header">
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
    </div>
    <script src="js/burger.js"></script>
    <div class="hotelhero">
        <div class="main">
            <img src="./images/hotelbanner.png" style = "width:100%;">
        </div>
    </div>
    <div class="slideshow-container">
    <?php $count = 0;
    while($res = $roomPics->fetch(PDO::FETCH_ASSOC)) {?>           
        <div class="mySlides fade">
            <?php 
            //echo '<img  class="room-image" style="width:100%" src="data:image/jpeg;base64,'.base64_encode( $res['roomPhoto'] ).'"/>';
             ?>
             <img  class="room-image" style="width:100%; height : 500px;" src=<?php echo $res['picSrc'];  ?> />
        </div>
    <?php $count++;  }?> 
        <!-- <div class="mySlides fade">
            <img src="img2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <img src="img2.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div> -->

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center" class="divider">
    <?php $i = 1;
     while($count!=0) 
     {
       echo '<span class="dot" onclick="currentSlide('.$i.')"></span>'; 
       $count--;
       $i++;
     }
    ?>    
    </div>
    <div class="maininfobox">
    <div class="infobox">
        <div class="innerinfo">
            <h3 class="outer">Cost</h3>
            <h3>: <?php echo $result['cost']; ?> $</h3>
        </div>
        <div class="innerinfo">
            <h3 class="outer">Room Category</h3>
            <h3>: <?php echo $result['roomCategory']; ?> </h3>
        </div>
        <div class="innerinfo">
            <h3 class="outer">Number of People</h3>
            <h3>: <?php echo $result['personNum']; ?> </h3>
        </div>
        <div class="innerinfo">
            <h3 class="outer">Beds</h3>
            <h3>: <?php echo $result['rooms']; ?> </h3>
        </div>
    </div>
    <div class="description">
        <div class="deschead">
            <h3>description</h3>
        </div>
        <div class="descbox">
            <p>
            <?php echo $result['roomDescr']; ?>
            
            </p>
        </div>
    </div>
    </div>
    <div class="dateclass">

    <?php 
    //  echo "PaymentForm.php?hotelID=" . $hotelid . "&roomID=" . $roomid
     ?>
    <form action="" Method = "POST">
    <div class="date">
        <label for ="check-in" class="input-label">Check in</label>
        <input name = "checkIn" type="date" class="input" id = "check-in">
    </div>
    <div class="date">
        <label for ="check-out" class="input-label">Check out</label>
        <input name = "checkOut" type="date" class="input" id = "check-out">
    </div>
    </div>
    <div class="btnclass">
        <button id = "subBtn" name="submitt" class="btn rooms-btn book" disabled>Book now &rarr;</button>
    </div>
    </form> 
    <script src="js/script.js"></script>
<script>

function checkValid(){
    if(document.getElementById("check-in").value < document.getElementById("check-out").value ){
    document.getElementById("subBtn").disabled = false;
    }else{
        document.getElementById("subBtn").disabled = true;
    }
}
document.getElementById("check-out").onchange = function () {
    checkValid();
}
document.getElementById("check-in").onchange = function () {
    checkValid();
}



</script>

<body>