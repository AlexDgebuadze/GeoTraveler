<?php
require_once  dirname(__FILE__).'/back-end/php/config.php';
$_SESSION["loggedin"] = false;
// require_once 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main\back-end\php\config.php';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactusStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
            <!--<li><a class ='login' href="#"> Login</a></li> მინდა რომ კომპზე არ გამოჩნდეს ნავიგაციაში და მობილურზე ბურგერ მენიუში გამოჩნდეს-->
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </NAV>
    <script src="js/burger.js"></script>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Aut assumenda asdasff ewfw efw efvsdf we fcvwesd fcsew csed c wesddasd
                sadasdadfjasd asld as</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>2000 rame rame, <br>rame, rame,<br> 55555</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>(+995)555555555</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>emailemail@email.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method = "post">
                    <h2>
                        Send Message
                    </h2>
                    <div class="inputBox">
                        <input type="text" name="Cname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Cmail" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea style="height: 75px;" name="Cmessage" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Send">
                    </div>

                <?php

                if(isset($_POST['submit'])){
                    $name = $_POST['Cname'];
                    $mail = $_POST['Cmail'];
                    $message = $_POST['Cmessage'];

                   $succ = $crud->SendFeedback($name,$mail,$message);
                if($succ){
                    echo "<h3 style=\"font-size: 20px; color: green;  text-align: center;\">Message was sent!</h3>";
                }
                else{
                //    echo $succ;
                }

                }

                         
                ?>



                </form>
            </div>
        </div>
    </section>
</body>
</html>