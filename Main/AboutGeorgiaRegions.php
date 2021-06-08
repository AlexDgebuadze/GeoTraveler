<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AboutGeorgiaRegionsStyle.css">
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
    <div class="AGHeader">
        <div class="Subject"><h1>Regions Of Georgia</h1></div>
        <div class="HeaderMap"></div>
    </div>
    <div class="Region">
        <h1>Imereti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/imereti.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Kakheti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Kakheti.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Guria</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Guria.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Qvemo Qartli</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Qvemo-Qartli.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Racha Lechkhumi Qvemo Svaneti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Racha-Lechkhumi-QvemoSvaneti.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Samegrelo Zemo Svaneti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Samegrelo-ZemoSvaneti.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Samtskhe-Javakheti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Samtskhe-javakheti.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Shida Qartli</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Shida-qartli.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
    </div>
    <div class="Region">
        <h1>Ajara</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="../Main/images/Ajara.png" alt=""></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Modi repellendus in perspiciatis laboriosam perferendis 
                quasi porro amet voluptatem incidunt praesentium nemo temporibus 
                adipisci ratione facere earum, unde veniam officiis nesciunt!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptatem accusamus voluptas amet, quos quisquam et aspernatur 
                repudiandae mollitia assumenda culpa in quo quam temporibus necessitatibus 
                dolorum nam magnam est laboriosam?Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Aliquid quibusdam laborum sapiente repudiandae ad corrupti. 
                Ratione eveniet a, tempore veniam placeat sunt ullam dicta aut doloremque,
                expedita laboriosam illum earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed impedit expedita minus
                earum quae, placeat laboriosam quod reiciendis, exercitationem esse nihil rem quam, 
                maiores quibusdam labore in id excepturi perspiciatis?</p>
        </div>
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
</body>