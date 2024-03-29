<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start(); 
$result = $crud->getHotelsTop();

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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
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
               echo ' <label id="LoginF" for="show"><a style=\'color : black; background-color: white;\' href="logout.php">   Logout  </a></label>';
            }else{
                echo ' <label id="LoginF" for="show"><a style=\'color : black; background-color: white;\' href="loginForm.php">   Login  </a>  </label>  ';
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
    <!-- ბურგერ მენიუს სკრიპტი -->
    <script src="js/burger.js"></script>
    <main>
        <div class="hero">
            <div class="main">
                <div class="main-heading">
                    <h1 class="title">Discover</h1>
                    <h2 class="subtitle">Hotels</h2>
                </div>
                <!-- <a href="#" class="btn btn-gradient">Explore now
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a> -->
            </div>
        </div>
        <section class="hotels">
            <div class="Container">
                <h5 class="section-head">
                    <span class="heading">Explore</span>
                    <span class="sub-heading">Our Beautiful Hotels</span>
                </h5>
              
                <div class="grid">
                <?php while($res = $result->fetch(PDO::FETCH_ASSOC)) {?>
                    <div class="grid-item featured-hotels">
                    <?php echo '<img  class="hotel-image" style="" src="data:image/jpeg;base64,'.base64_encode( $res['photo'] ).'"/>'; ?> 
                        <h5 class="hotel-name"><?php echo $res['hotelName']; ?> </h5>
                        <span class="hote-price">From $ <?php echo $res['minCost']; ?>  /Night</span>
                        <div class="hotel-rating">
                         <?php 
                        $c = (int)$res['rate'];
                        while($c>0) {
                            echo '<i class="fas fa-star rating"></i>';
                            $c--;}
                        ?> 
                        </div>
                        <a href=<?php  echo "rooms.php?hotelID=" . $res['hotelId']; ?> class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>

                  
                    </div>
                    <?php }?>    
                </div>
            </div>
            <div class="allhotels">
                <a href="hotels.php" class="btn btn-gradient">See All Hotels
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
            </div>
        </section>
        <section class="offer">
            <div class="Container">
                <div class="offer-content">
                    <div class="discount">
                        40% off
                    </div>
                    <h5 class="hotel-name">The Paradise</h5>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <p class="paragraph">
                    All our guestrooms are elegantly furnished with handmade furniture include
 luxury en-suite facilities with complimentary amenities pack, flat screen LCD TV, 
tea/coffee making facilities, fan, hairdryer and the finest pure white linen and towels.
                    </p>
                    <a href="#" class="btn btn-gradient">Redeem Offer
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <section class="rooms">
            <div class="Container">
                <h5 class="section-head">
                    <span class="heading">Luxurious</span>
                    <span class="sub-heading">Affordable Rooms</span>
                </h5>
                <div class="grid rooms-grid">
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class = "room-image" src="images/room_1.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                            Our Deluxe king size room has a seating area, ample storage, digital safe, minibar and luxurious duck down bedding. This room can also be configured with an extra roll-away bed for families of 3.

                            </p>
                        </div>
                    </div>

                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class = "room-image" src="/images/room_3.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                                
 Conveniently situated away from congestion and crowds, we provide you with a refreshing opportunity to experience choices 
and flexibility like never before. Complimentary high-speed Internet is available throughout our hotel, and keep up your physical routine in our 24-hour fitness center. 

                            </p>
                        </div>
                    </div>

                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class = "room-image" src="images/room_4.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                            As our smallest budget rooms, the Compact bedrooms are suited for single occupancy or short-stay double occupancy as they have limited space and storage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </main>
    <!-- მთავარი სკრიპტი -->
    <script src="main.js"></script>
</body>
</html>