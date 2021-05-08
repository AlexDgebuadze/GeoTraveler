<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start(); 
$result = $crud->getHotels();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
            <li><a href="AboutGeorgia.html"> About Georgia </a></li>
            <li><a href="contactus.php"> Contact Us </a></li>
            <li>
            <?php
            
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
               echo ' <li> <a style=\'color : white\' href="myacc.php">   My Account  </a>  </li>';  
               echo ' <label id="LoginF" for="show" class="show-btn"><a style=\'color : black\' href="logout.php">   Logout  </a></label>';
            }else{
                echo ' <label id="LoginF" for="show" class="show-btn"><a style=\'color : black\' href="loginForm.php">   Login  </a>  </label>  ';
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
    <div class="containter">
        <div class="banner">
        </div>
        <div class="title">
            <h1>EXPLORE GEORGIA</h1>
        </div>
        <div class='center'>
            <input type="checkbox" id="show">
            <!-- <label for="show" class="show-btn">Sign In</label> -->

        </div>

    <div class="select-container">
        <h1>Plan Your Trip</h1>
        <!-- <h2>Where To Go</h2> -->
        <div class="select-box">
            <h2>Where To Go</h2>
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="Tbilisi" name="Category" value="Tbilisi">
                    <label for="Tbilisi">Tbilisi</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Kutaisi" name="Category" value="Kutaisi">
                    <label for="Kutaisi">Kutaisi</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Batumi" name="Category" value="Batumi">
                    <label for="Batumi">Batumi</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Mcxeta" name="Category" value="Mcxeta">
                    <label for="Mcxeta">Mcxeta</label>
                </div>
            </div>
            <div class="selected">
                Select where to go
            </div>
            <div class="search-box">
                <input type="text" placeholder="Type City...">
            </div>
        </div>
        <!-- <h2>What To Do</h2> -->
        <div class="select-box">
            <h2>What To Do</h2>
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="Swim" name="Category" value="Swim">
                    <label for="Swim">Swimming</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Hike" name="Category" value="Hike">
                    <label for="Hike">Hiking</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Camp" name="Category" value="Camp">
                    <label for="Camp">Camping</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Climb" name="Category" value="Climb">
                    <label for="Climb">Climbing</label>
                </div>
                
            </div>
            <div class="selected">
                Select what to do
            </div>
            <div class="search-box">
                <input type="text" placeholder="Type Activity...">
            </div>
        </div>
        <input type="submit" value="Upload" class="Select-Button">
    </div>
    <!-- select-ის სკრიპტი -->
    <script src="js/select.js"></script>





 <?php while($res = $result->fetch(PDO::FETCH_ASSOC)) {?>

    <label> <?php echo $res['hotelName']; ?> </label>
    <?php echo '<img style="" src="data:image/jpeg;base64,'.base64_encode( $res['photo'] ).'"/>'; ?> 
    <label> <?php echo $res['hotelDescr']; ?>  </label>
    <label> <?php echo $res['region']; ?> </label>
    <label> <?php echo $res['nearAtractions']; ?> </label>
    <label> <?php echo $res['roomSum']; ?> </label>
    <label> <?php echo $res['rate']; ?> </label>

 <?php }?>










    

</body>


<script src="js/login.js"></script>
</html>
