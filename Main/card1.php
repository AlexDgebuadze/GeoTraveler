<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/AboutGeorgiaNatureStyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Mountains+of+Christmas&display=swap" rel="stylesheet">
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
        <h1>Georgian Culture</h1>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>Georgian culture is an exotic, mysterious and ancient culture stretching back for millennia. Elements of Anatolian, European, Persian, Arabian, Ottoman and Far Eastern cultures have influenced Georgia’s own ethnic identity resulting in one of the most unique and hospitable cultures in the world. Georgian culture is world renowned for being accommodating and tolerant. Traditionally, Georgian people consider guests to be a gift from god and their welcoming amiability is immediately apparent upon a traveler’s arrival.<br><br>

                Georgia’s strategic geographic location between Europe and Asia is one of the primary reasons for its diverse, yet distinct, cultural features. Its vector on the historic Silk Road enabled important trade connecting the north, south, east and west. This junction of commerce along with Georgia’s own bounty of resources combined to form a definitive amalgamation of cultures.<br><br>
                
                Throughout history, pockets of isolation in the remote mountain areas have maintained much of their primeval peculiarity. These gems of antiquity offer the tourist a glimpse into the authentic Georgian condition.<br><br>
                
                One marvels at the uncanny combination of Georgia’s ancient and modern characteristics. Stark progress in recent years has spawned impressive infrastructural development while bolstering cultural and historic preservation making all that Georgian culture has to offer easily accessible.<br><br>
                
                Recognition of Georgian culture has piqued international interest placing Georgia at the forefront of heritage tourism and research to become one of the great cultural legacies of the modern world<br><br>
                
                Georgian monumental architecture, world famous polyphonic singing and traditional music, book miniature, rich spiritual and secular literature, colorful folk dances and ballet, theatre and cinema, jewelry, metal works, enamels, and paintings all bear trademark qualities of this ancient culture.<br><br>
                
                The period between the eleventh and twelfth centuries was the Renaissance of the Georgian state when monks in academies, churches and monasteries put forward new humanistic ideas. Even during the middle Ages, philosophy and historiography, theology and law, poetry and art, all flourished in Georgia.<br><br>
                
                Architecture, astronomy, geography and other disciplines of knowledge were being developed. Applied art from this period forward, especially jewelry manufacturing and the art of metallurgy (chasing), still prospers today.<br><br>
                
                Blossoming of secular culture occurred in the nineteenth century when Georgian writers and artists, influenced by European trends, enriched the treasury of national art. Two of the most significant entries in the treasury of spiritual Georgian culture are the traditions of musical and dancing folklore.<br><br>
                
                Today, Georgian culture is richer than ever. For any traveler seeking a completely original destination with diverse cultural influence, Georgia is an accessible and affordable choice.</p>
            </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Supra</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                Georgian social culture is encapsulated in a single ceremonial feast of traditional Georgian cuisine, multitudes of Georgian wine and the traditional Georgian toastmaster – “Tamada”. This banquet is called “Supra”.

                These convivial gatherings often last from early afternoon well into the early morning. Toasts are delivered by Tamada which can last upwards of thirty minutes. During the interim while Tamada is speaking, drinking is prohibited.
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Applied Art</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                The traditional Georgian applied art is mainly represented by high art items from ceramics, metal, wood, and bones. Georgia is famous for its fine jewelry, engraving on metal, armory.
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Music and Dances (Folklore)</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                Georgian music and dance are among the most developed in the world in terms of their advanced choral harmony and rhythm. Not only that, they are a beautiful reflection of the national heritage of the Georgian people.
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Literature</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                Georgian literature began to take shape in the 5th century AD. Religious writings of the country’s early Christian era recounted the lives of martyrs and saints, while folklore from later centuries were filled with legends of national heroes and instructive poems.
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Painting and Architecture</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                Georgian painting is represented by the works of such masters as legendary Niko Pirosmani, Gigo Gabashvili, David Kakabadze, Lado Gudiashvili, Cornelius Sanadze, Elena Akhvlediani, Sergey Kobuladze, Simon Virsalasze and Ekaterina Bagdavadze. Famous Georgian sculptors include Eldudzha Amashukeli, Irakli Ochiauri and Zurab Tsereteli.
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Theatre</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                Georgian dramaturgy goes back to the mid-19 th century. Its founder is the writer, translator and theater figure Georgi Eristavi (1811–1864).
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Cinema</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                The birth of Georgian cinema is related to the beginning of the 20 th century. The first film was made in 1912. Back then nobody knew that Georgian movies would be recognized all over the world.
            </p>
        </div>
    </div>
    <div class="Mountains">
        <h3>Georgian Museums</h3>
        <div class="MountainContent">
            <div class="Mountainsimg"><img src="images/Svaneti.jpg"></div>
            <p>
                Georgian museums number over 100, and more than 20 of these are in Tbilisi alone. The largest museum in the country is the Georgian National Museum, founded in 1852 and known until 1919 as the Caucasian Museum.
            </p>
        </div>
    </div>
    <div class="slider">
        <input type="radio" name="slider" checked="checked" id="1">
        <div class="imgBox">
            <label for="2"><img src="images/Tbilisi-night.jpg"></label>
        </div>
        <input type="radio" name="slider" id="2">
        <div class="imgBox">
            <label for="1"><img src="images/Tbilisi-view-1.jpg"></label>
        </div>
    </div>
</body>