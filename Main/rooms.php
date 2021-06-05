<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start(); 

$hotelid = $_GET['hotelID'];
$room = $crud->getRooms($hotelid);

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
    <link rel="stylesheet" href="rooms.css">
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

<main>

    <section class="rooms">
        <div class="Container">
            <h5 class="section-head">
                <span class="heading">Hotel Name</span>
                <span class="sub-heading">Rooms</span>
            </h5>
            <div class="grid rooms-grid">

            <?php while($res = $room->fetch(PDO::FETCH_ASSOC)) {?>
                    
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                    <?php 
                    echo '<img  class="room-image" style="" src="data:image/jpeg;base64,'.base64_encode( $res['roomPhoto'] ).'"/>'; 
                    ?>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price"><?php echo $res['cost']; ?> $<span class="per-night"> Per night</span></span>
                        <p class="paragraph">
                        <?php echo $res['roomDescr']; ?>
                        </p>
                        <a href=<?php  echo "bookroom.php?hotelID=" . $hotelid . "&roomID=" . $res['roomid'] ?> class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>

            <?php }?>    
               
            </div>
        </div>
    </section>
</main>
</body>