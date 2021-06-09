<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AboutGeorgiaNatureStyle.css">
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
    <div class="Mountains">
        <h1>Architecture of Georgia Through the Centuries</h1>
        <p>Georgia is in many ways an exceptional country. Outstanding pristine nature, wild mountains, clear blue skies and deep forests bear witness to a turbulent past that left marks on its heritage and in its people’s minds. A constant struggle between three great empires, Persian, Russian and Ottoman, to dominate the Caucasus region, made Georgia one of the culturally most diverse countries in the world. Unlike its neighbours, Georgia took advantage of its complicated past and turned it into art. Architecture of Georgia is outstanding. Different styles, a refined sense for plastic arts and superb cuisine are just some of the ways in which Georgians express themselves.</p>
        <h3>Georgia’s Unique Architectural Heritage</h3>
        <p>One would not expect such a variety of architectural styles in a country located on the battlefield of civilizations. As a rule, each civilization tends to impose its cultural values on others by destroying the alien one and building its heritage. But architecture of Georgia somehow survived. From ancient stone towers and monasteries to medieval fortresses and traditional houses. Even the neoclassical, art nouveau, cool socialist and ultra-modern architecture, it’s all there at its finest! Not only its incredible capital Tbilisi and the sea side resort of Batumi house an enormous architectural treasure, but the rest of the country has a lot to offer too.        </p>
        <h3>Svanetian Towers</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Svanetian-towers.jpg"></div>
            <p>Set amongst the mighty Caucasus Mountain Range, Svaneti is home to thousand year old defense towers, now World Heritage Site. Svan people were not always in peace with northern and eastern neighbors, especially when there wasn’t enough food for all. In order to protect themselves they had to build some kind of stone fortress. Unlike elsewhere in the world where an entire village was built within a surrounding fortress, in Svaneti each family would have its own in the shape of a tall stone tower. During a siege, the whole family (up to hundred people) would hide inside the tower and stay there until the oppressor left.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Monasteries</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Monasteries.jpg"></div>
            <p>Georgia was the second country in the world to adopt Christianity in the 4th century. Historically, the church played an important role in preserving Georgian identity, and while largely left aside during the communist rule, it has emerged as the country’s most loved institution. Hundreds of medieval monasteries can be visited all around the country. Reminiscent of Romanesque art they are easily recognisable, due to their tall drum and conic shape dome. Apart from that, Georgia is home to two uniquely authentic cave monasteries: Vardzia and David Gareja.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Traditional Houses</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Houses.jpg"></div>
            <p>In Georgia there is a long tradition of building colourful vernacular architecture. Different regions have different house types but they do share some features. A typical Georgian urban house would be a two storey building with a characteristic balcony with lace like decoration. Some of them with modest classical wooden balustrades others with arabesque shapes. Tbilisi’s houses are larger and have balconies spanning over several stories. In the wine region of Kakheti, the town of Sighnaghi hosts many outstanding traditional houses.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Persian Influences</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Persian.jpg"></div>
            <p>Between the 16th and 20th Centuries, Persia (where current Iran is) influenced heavily Georgian architecture. Art was very important in Persian culture, and architecture considered its highest form. Cosmic symbolism is the main motif in all Persian inspired buildings. You can see the latter in the perfect relationship of form and scale, structural creativity, and lavish geometrical decorations. Symbolic geometry is everywhere, including rectangular courtyards, circles, squares, and decorative elements. Some of the best examples of this superb architecture are in Tbilisi, such as the Chreli Abano Baths and the Georgian National Opera Theater.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Fin de Siècle and Art Nouveau Architecture</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Fin.jpg"></div>
            <p>Following the discovery of oil in Azerbaijan in the mid 19th century, massive pipelines were laid throughout Georgia to bring oil to Europe. Money from the oil boom financed international style architecture all around the country. In Batumi, a large port on the Black Sea, hundreds of elegant fin de siècle buildings were erected bringing a European feel to this charming city. Although in style neoclassical, their colours and shapes were far off the usual grid. In the meantime Tbilisi was a Mecca for numerous Art Nouveau artists. The best example of that exciting period is the cosmopolitan David Aghmashenebeli Avenue.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Soviet Architecture</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Soviet.jpg"></div>
            <p>Soviet times were marked by the massive construction of huge residential blocks all over the country. While late post-war architecture reflects simple lines, the early national socialist style incorporated some elements of Georgian art. Probably the most interesting example of that period is the Georgian National Academy of Sciences in Tbilisi. The other extraordinary building is from the late period and serves as the headquarters of the Bank of Georgia. Built as the Ministry of Infrastructure in 1975, it was inspired by the surrounding forest. The idea was to cover the least space possible on the ground and leave it for nature.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Contemporary Architecture of Georgia</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Contemporary.jpg"></div>
            <p>Despite the not so bright economic situation in Georgia since the fall of Communism the state funded numerous large projects. Cool innovative designs and different materials, shapes and colours were used for public service halls, border crossings, police stations, government buildings, airports, office towers and hotels, especially in Batumi and Tbilisi. New interesting parks and bridges and several grand scale renovations gave new life to a nation slowly awakening. The new ultra-modern parliament building in Kutaisi was finished in 2012. It was Georgia’s Legislative seat until 2019, when the parliament moved back to Tbilisi.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Architecture of Tbilisi</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Tbilisi.jpg"></div>
            <p>To us, Tbilisi is one of the most beautiful cities in the world. We couldn’t resist the way architecture interacts with the landscape. It’s so unique that we felt in a fairy tale city. In Tbilisi, you’ll find plenty of wooden houses with lace decorated balconies, ancient baths, centuries-old churches, elegant neoclassical and art nouveau palaces, cool soviet buildings, and even high-quality contemporary architecture. The River Mtkvari cuts deep into the rocks dividing the city in two. Art is everywhere, and Tbilisi citizens stylish and cosmopolitan. All you have to do is get lost in one of its old neighborhoods and let the city conquer you. </p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Architecture of Batumi</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Batumi.jpg"></div>
            <p>Batumi’s rich and varied architecture impressed us greatly. The city rose to prominence at the end of the 19th Century, thus the lavish neoclassical and art nouveau buildings from that time. At the beginning of the 21st Century Batumi flourished again, but this time it grew in height. The coast line is full of bizarre towers and novelty buildings of different colors, shapes and styles. Three interesting squares, plenty of nice parks and a 5 kilometer long Seaside Promenade complete the feast. Everything is uniquely Georgian and set amongst outstanding nature. What an outstanding city!</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Staying in an Architectural Landmark</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/architecture/Georgia.jpg"></div>
            <p>If you are a hotel queen like us, you’ll be delighted to know that in Georgia you can stay in iconic historic and contemporary architectural landmarks.

                In Tbilisi, you have plenty of options to choose from. Our favorite is the Stamba Hotel, a former Soviet-era publishing house. This brutalist gem has been refurbished to include top-notch facilities and embellished with plants and art.
                
                If you want to stay in contemporary Batumi, then the quirky postmodern Sheraton Batumi is for you. This skyscraper in the shape of a lighthouse offers elegant rooms and breathtaking views.
                In Tskaltubo, near Kutaisi, you can stay in the famous resort where Stalin used to spend his holidays. The Tskaltubo Spa Resort is the original building from 1925, but fully reconstructed a few years ago. The result is outstanding.

                In Borjomi, Georgia’s premier spa town, book a room at the Golden Tulip Borjomi. This is the famous Blue Palace Firuza built for the Iranian consul in 1892. The building mixes Georgian, Persian, and European architecture.
                
                Finally, if you love architecture and wine, stay in the famous Tsinandali Estate in Telavi, Eastern Georgia. Not only is the building fascinating, but Georgian wine was made here for the first time 230 years ago.</p>
            </div>
    </div>
    <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/architecture/Georgia.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Batumi.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Tbilisi.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Contemporary.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Soviet.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Fin.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Persian.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Monasteries.jpg"></label>
        </div><input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/architecture/Svanetian-towers.jpg"></label>
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