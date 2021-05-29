<?php
session_start(); 
require_once dirname(__FILE__).'/back-end/php/crud.php';
require_once dirname(__FILE__).'/back-end/php/user.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $result = $user->getUserbyUsername($_SESSION["username"]);

}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('loginForm.php'); </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/PaymentCSS.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <title>GeoTraveler</title>
</head>
<body>
    <NAV style = "background-color: darkslategray;">
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
    <div class="emptydiv">
        <h1>PLACEHOLDER</h1>
    </div>
    <div class="paymentwrapper">
        <h2>Payment Form</h2>
        <form method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Mobile" required class="name" value="<?php echo $result['mobile'] ?>">
                    <i class="fa fa-mobile icon" ></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="Email Adress" placeholder="Email Adress"required class="name" value="<?php echo $result['email'] ?>">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label id="my_card" for="bc1"><a>My Card</a></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label id="new_card" for="bc2"><a>New Card</a></label>
                </div>
            </div>
            <div id = "cardNumDiv" style = "display : none" class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div id = "cardExpDiv" style = "display : none" class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Exp. Date (e.g 01/01) " required class="name">
                    <i class="fa fa-calendar icon"></i>
                </div>
            </div>
            <div id = "cardCVVDiv" style = "display : none" class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>  
        </form>
    </div>
<script>
    var newCard = document.getElementById('new_card');
    var myCard = document.getElementById('my_card');

    var cardNumDiv = document.getElementById('cardNumDiv');
    var cardExpDiv = document.getElementById('cardExpDiv');
    var cardCVVDiv = document.getElementById('cardCVVDiv');

    myCard.onclick = function(){
        cardNumDiv.style.display = 'none';
        cardExpDiv.style.display = 'none';
        cardCVVDiv.style.display = 'none';
    }

    newCard.onclick = function(){
        cardNumDiv.style.display = 'block';
        cardExpDiv.style.display = 'block'; 
        cardCVVDiv.style.display = 'block';
    }

</script>
    </body>

    </html>