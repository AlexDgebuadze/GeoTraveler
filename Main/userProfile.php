<?php
session_start(); 
          
require_once dirname(__FILE__).'/back-end/php/crud.php';
require_once dirname(__FILE__).'/back-end/php/user.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $result = $user->getUserbyUsername($_SESSION["username"]);

    $uid = $_SESSION["userID"];

    $card = $user->getCard($uid);
    $reservation = $crud->getUserReservations($uid);
}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('loginForm.php'); </script>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Settings</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="css/userCSS.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<section class="header">
    <NAV class="navigation">
        <div class="logo">
            <a href="index.php"><h3>GeoTraveler</h3></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php"> Main </a></li>
            <li><a href="destination.php"> Destination </a></li>
            <li><a href="PlanYourTrip.php"> Plan Your Trip </a></li>
            <li><a href="AboutGeorgia.php"> About Georgia </a></li>
            <li><a href="contactus.php"> Contact Us </a></li>
            <!-- <li><label for="show" class="show-btn">Logout</label></li> -->
            <li>
                <?php
                
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
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
</section>
<div class="user-interface">
    <h1>USER INTERFACE</h1>
</div>
<section class="user-main-container">
    <div class="user-container">
        <div class="left-box">
            <nav class="user-navigation">
                <a onclick="tabs(0)" class="tab active"><i class="fa fa-user"></i></a>
                <!-- <i class="fa fa-user"></i> -->
                <a onclick="tabs(1)" class="tab"><i class="fa fa-credit-card"></i></a>
                <!-- <i class="fa fa-credit-card"></i> -->
                <a id = "reservT" onclick="tabs(2)" class="tab"><i class="fa fa-history"></i></a>
            </nav>
        </div>
        <div class="right-box">
        <form action="updateProfile.php" method="POST">
            <div class="profile tab-show">
                <h1>Personal Info</h1>
                <h2>First Name</h2>
                <input type="text" name="Uname" class="input-info" value="<?php echo $result['name'] ?>" >
                <h2>Last Name</h2>
                <input type="text" name="Usurname" class="input-info" value="<?php echo $result['surname'] ?>">
                <h2>Mobile</h2>
                <input type="text" name="Umobile" class="input-info" value="<?php echo $result['mobile'] ?>">
                <h2>Email</h2>
                <input type="mail" name="Uemail" class="input-info" value="<?php echo $result['email'] ?>">
                <button id = "updateProfile" class="user-btn">Update</button>
                <br></br>
                <?php 
                // if( $_SESSION["userMessg"]=="Something is wrong!" ){
                //     echo '<span  style="margin-top : 15px; color: red;">'.$_SESSION["userMessg"].' </span>';
                // } else{
                //     echo '<span  style="margin-top : 15px; color: green;">'.$_SESSION["userMessg"].' </span>';
                // } 
                // $_SESSION["userMessg"]=""; 
                ?> 
               
            </div>
        </form>
        <form action="manageCard.php" method="POST">
            <div class="Payment tab-show">
                <h1>Payment Info</h1>
                <h2>Payment Method</h2>
                <input name= "cardNum" type="text" class="input-info" placeholder="0202 5666 6855 7336" value="<?php echo $card['cardNumber'] ?>">
                <h2>Exp Date</h2>
                <input name= "expDate"  type="text" class="input-info" placeholder="24/02" value="<?php echo $card['exprDate'] ?>">
                <h2>Name on Card</h2>
                <input name= "user"  type="text" class="input-info" placeholder="Jane Doe" value="<?php echo $card['cardUser'] ?>">
                <h2>cvv</h2>
                <input name= "cvv" type="text" class="input-info" placeholder="111" value="<?php echo $card['cardcvv'] ?>">
                <button class="user-btn">Update</button>
                <br></br>
                <?php 
                // if( $_SESSION["cardMessg"]=="Something is wrong!" ){
                //     echo '<span  style="margin-top : 15px; color: red;">'.$_SESSION["cardMessg"].' </span>';
                // } else{
                //     echo '<span  style="margin-top : 15px; color: green;">'.$_SESSION["cardMessg"].' </span>';
                // } 
                // $_SESSION["cardMessg"]=""; 
                ?>
            </div>
        </form>
            <div class="history tab-show">
                <h1>Booking History</h1>
                <!-- <h2>Photo</h2>
                <input type="text" class="input-info hist" value="Jane"> -->
                <?php while($row = $reservation->fetch(PDO::FETCH_ASSOC)) { ?>      
                <div class="hotelhist">
                    <div class="inputrow">
                        <h2 class="hist">Reservation ID</h2>
                        <label type="text" class="input-label hist" value="555555555"><?php echo $row['reservationID']; ?> </label>
                    </div>
                    <div class="inputrow">
                        <h2 class="hist">Check-in Time</h2>
                        <label type="date" class="input-label hist" value="Doe"><?php echo $row['checkIN']; ?></label>
                    </div>
                    <div class="inputrow">
                        <h2 class="hist">Check-Out Time</h2>
                        <label type="date" class="input-label hist" value="Doe"><?php echo $row['checkOUT']; ?></label>
                    </div>
                    <div class="cancelrow" style="margin-left:30px;">
                        <a href= <?php echo "deleteReservation.php?resID=" . $row['reservationID']; ?> id = "updateProfile" class="user-btn" style="background:crimson;">X</a>
                    </div>
                </div>
                <?php }?>
                
                <!-- <h2>Contact number</h2>
                <input type="text" class="input-info" value="555555555">
                <h2>Email</h2>
                <input type="mail" class="input-info" value="useruser@user.com">
                <button class="user-btn dlt-btn">Delete</button> -->
                <!-- <button class="user-btn">Confirm</button> -->
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/afb2ed20b4.js" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script>
        const tabBtn = document.querySelectorAll(".tab");
        const tab = document.querySelectorAll(".tab-show");

        function tabs(panelIndex) {
            tab.forEach(function(node){
                node.style.display = "none";
            }
            );
            tab[panelIndex].style.display = "block";
        }
        tabs(0);
    </script>
    <script>
        $(".tab").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    </script>
</section>
</body>   