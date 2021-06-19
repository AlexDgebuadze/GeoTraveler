<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AboutGeorgiaStyle.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Mountains+of+Christmas&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
               echo ' <label id="LoginF" for="show" ><a style=\'color : black; background-color: white;\' href="logout.php">   Logout  </a></label>';
            }else{
                echo ' <label id="LoginF" for="show" ><a style=\'color : black; background-color: white;\' href="loginForm.php">   Login  </a>  </label>  ';
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
    <div class="AboutContainer">
        <div class="row">
            <div class="col"><h1>GEORGIA</h1>
            <p>
                Georgia is one of the oldest wine regions in the world.<br>
                It is considered that Georgia is the birthplace of Wine.
            </p>
        </div>
        </div>
    </div>
    <div class="Regions">
        <div class="RegionsHeader">
            <h1>Regions Of Georgia</h1>
        </div>
        <a href="AboutGeorgiaRegions.php">
            <div class="map">
            </div>
        </a>
    </div>
    <div id = "Nature" class="NatureContainer">
        <div class="NatureHeader">
            <h1>NATURE</h1>
        </div>
    </div>
    <div class="cardcontainer">
        <main class="Naturegrid">
            <article>
                <img src="images/Svaneti.jpg" alt="">
                <div class="NatureText">
                    <h3>Mountains</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="AboutGeorgiaNatureMountains.php"><button>READ MORE</button></a>
                </div>
            </article>
            <article>
                <img src="images/NaturalReserves.jpg" alt="">
                <div class="NatureText">
                    <h3>Natural Reserves</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="naturalreserves.php"><button>READ MORE</button></a>
                </div>
            </article>
            <article>
                <img src="images/animals.jpg" alt="">
                <div class="NatureText">
                    <h3>Animals</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="animals.php"><button>READ MORE</button></a>
                </div>
            </article>
        </main>
    </div>
    <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/Tbilisi-night.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="3"><img src="images/Tbilisi-view-1.jpg"></label>
        </div>
        <input type="radio" name="slider" id="3">
        <div class="imgBox">
            <label for="4"><img src="images/Old-Tbilisi-1.jpg"></label>
        </div>
        <input type="radio" name="slider" id="4">
        <div class="imgBox">
            <label for="5"><img src="images/Turtle-Lake.jpg"></label>
        </div>
        <input type="radio" name="slider" id="5">
        <div class="imgBox">
            <label for="6"><img src="images/mcxeta1.jpg"></label>
        </div>
        <input type="radio" name="slider" id="6">
        <div class="imgBox">
            <label for="7"><img src="images/mcxeta2.jpg"></label>
        </div>
        <input type="radio" name="slider" id="7">
        <div class="imgBox">
            <label for="8"><img src="images/Bridge-of-Peace.jpg"></label>
        </div>
        <input type="radio" name="slider" id="8">
        <div class="imgBox">
            <label for="9"><img src="images/gori1.jpg"></label>
        </div>
        <input type="radio" name="slider" id="9">
        <div class="imgBox">
            <label for="10"><img src="images/Mtkvari-river.jpg"></label>
        </div>
        <input type="radio" name="slider" id="10">
        <div class="imgBox">
            <label for="1"><img src="images/uflistsikhe.jpg"></label>
        </div>
    </div>
    </div>
    <div id = "Culture" class="CultureContainer">
        <div class="CultureHeader">
            <h1>CULTURE</h1>
        </div>
    </div>
    <div class="cardcontainer">
        <main class="Naturegrid">
            <article>
                <img src="images/Architecture.png" alt="">
                <div class="NatureText">
                    <h3>Architecture</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="architecture.php"><button>READ MORE</button></a>
                </div>
            </article>
            <article>
                <img src="images/khinkali_1.jpg" alt="">
                <div class="NatureText">
                    <h3>Cuisine</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="art.php"><button>READ MORE</button></a>
                </div>
            </article>
            <article>
                <img src="images/georgian-wine-1621067275.jpg" alt="">
                <div class="NatureText">
                    <h3>Wine</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="wine.php"><button>READ MORE</button></a>
                </div>
            </article>
        </main>
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
<script>
  var i = 2;
  setInterval(
  function() { 
  if(i == 11){i = 1;}    
  document.getElementById(i.toString()).click();
  i++;
  }
  , 3000);

</script>


</body>