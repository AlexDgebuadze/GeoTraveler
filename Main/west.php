<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/westStyle.css">
    <link rel="stylesheet" href="css/capitalstyle.css">
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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <title>GeoTraveler</title>
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
    <div class="maincontent">
        <div class="headercontent">
            <h1>West Georgia</h1>
        </div>
        <div class="westmap">
            <img src="images/westgeorgia.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ab saepe possimus consectetur. Reprehenderit ex quod dolor 
                suscipit fuga hic dignissimos iure, saepe magnam, dolorem, 
                deserunt officia. Consequuntur odit sapiente maiores.</p> -->
        </div>
    </div>
    <div class="tbilisicontent" style="margin-top:50px;">
        <div class="imgcontainer">
            <img src="images/west/Kutaisi.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>Kutaisi</h2>
            <p>
            Smaller than Tbilisi and with a completely different feel, Georgia’s second-biggest city tends to get skipped over. Those who only visit Kutaisi airport are making a terrible mistake: This is Georgia’s most charming city, in my eyes anyway!<br><BR>
            It’s also one of Europe’s oldest. Inhabited since the 6th century BC, Kutaisi served as the political centre of the Kingdom of Colchis in the Middle Ages. Later it became Georgia’s cultural capital – the stomping ground of countless poets, musicians and scholars – until Soviet times, when Kutaisi was retrofitted for industry and her skyline remoulded.<BR><BR>
            Browse the Green Bazaar, ride the cable car over the roaring Rioni river, and step inside Kutaisi’s synagogue, one of the most beautiful in the region. On the outskirts of Kutaisi you’ll find the UNESCO-Listed Gelati Monastery and pretty Motsameta Monastery, linked together by a forest hiking trail. Bagrati Cathedral is the city’s best sunset spot.<BR><BR>
            Kutaisi is the gateway to Imereti region, the lush western portion of Georgia known for its canyons, waterfalls, caves and wineries. There are plenty more must-sees within a day trip’s distance of Kutaisi that I’ll get to later.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/west/Batumi.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>BATUMI</h2>
            <p>
            Georgia’s biggest Black Sea resort city has a reputation for being ‘the Las Vegas of the Caucasus’. But now that Batumi is undergoing something of a renaissance, my perception has totally changed . Living in Batumi showed me a different side of the city and I now consider it one of my favourite places in Georgia.<BR><BR>
            Batumi still centres on the same old stretch of sand (or should I say, pebbles) that has been attracting summer tourists for centuries. But away from the shoreline, Batumi has a slew of cool cafes, creative spaces and an excellent street art scene. Love it or hate it, the outlandish modern architecture is a highlight, and the Old Town is full of surprises. Add a wonderful produce market, a scenic aerial cableway, some great urban hikes, and access to some of Western Georgia’s best national parks to the mix, and you have an all-round excellent destination.<BR><BR>
            Another perk of visiting Batumi is getting acquainted with distinctive Adjarian culture and cuisine. This is the birthplace of the famous Adjaruli Khachapuri and a range of other indulgent delicacies, including my personal favourite, Borano (melted cheese smothered in hot butter).<BR><BR>
            Walk or cycle Batumi Boulevard, an idyllic pathway that stretches along the seafront. If you’re feeling adventurous, you can cycle all the way to the Turkish border. Batumi is an ever-evolving city that has so much to offer beyond the beach.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/west/zugdidi.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>ZUGDIDI</h2>
            <p>
            The biggest city in Georgia’s Western Samegrelo region, Zugdidi is the place to immerse yourself in Megrelian culture and cuisine. Most people stop here for a few hours on the way up to Svaneti, but it’s worthwhile spending a night or two in Zugdidi to break the journey – even if it’s just to eat at Diaroni, one of Georgia’s best restaurants. The specialty here is of course Megrelian food: Rich Kharcho, stringy Elarji and creamy Gebzhalia.<BR><BR>
            In Zugdidi you can learn about the legacy of the Dadiani family, Samegrelo’s old rulers. The immaculate Dadiani Palace and its private gardens (now the city Botanical Gardens) is unlike anything else you’ll see in Georgia. It’s worth the museum ticket price to see the eerie bronze Napoleon Death Mask inside (the French connection is totally unexpected and fascinating!).<BR><BR>
            Other things to do in Zugdidi include a side trip to Rukhi Castle for a view of Abkhazia, watching master potters make black-smoked ceramics at Orkol Studio, seeking out the Soviet-era mosaics in the area, and roaming the undercover market for authentic Adjika, a delicious spice blend that has its roots in the west.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/west/Georgiasvaneti-14" alt="">
        </div>
        <div class="contentcontainer">
            <h2>SVANETI (MESTIA & USHGULI)</h2>
            <p>
            After Kazbegi, Zemo Svaneti Planned National Park is the most popular mountain area in Georgia. Located in the far north-west, the region’s biggest town of Mestia is accessible year-round by road or via a short flight.<BR><BR>
            Mestia is well-equipped to handle the many hundreds of tourists that visit Svaneti each year, with a good range of guesthouses and restaurants. A meal of Kubdari (Svanetian meat pie) and Mtsvadi BBQ sprinkled with Svanetian spiced salt at Laila on the main square is just the thing after the long and nail-biting marshrutka ride up.<BR><BR>
            Hiking is the thing to do in Svaneti. Mountain trails range from easy day hikes to challenging multi-day treks, the most popular being to Koruldi Lakes, Chaladi Glacier and for the daring, Mount Ushba.<BR><BR>
            As beautiful as the landscape is, the local culture here is equally entrancing. This is the ancestral home of the Svans, known for being fierce fighters who lived in fortified tower houses. These stone towers, known as Koshki in Georgian, can be seen all across the northern regions and over the border in Chechnya – but Svaneti’s towers are acclaimed for being both numerous and well-preserved.<BR><BR>
            Ushguli is the most well-known of the upper villages in Svaneti and can be visited as a day trip by van from Mestia or as the end point of the popular Mestia to Ushguli multi-day hike. Ushguli is considered the highest inhabited village in Europe and because of its abundance of towers (there are more than 200 in Chazhashi, one of Ushguli’s villages, alone), it was named a UNESCO World Heritage Site in 1996.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/west/vardzia.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>Vardzia</h2>
            <p>
            Georgia is home to a number of ‘cave cities’ and ‘cave monasteries’ – vast complexes of chambers and grottoes hewn from rocky slopes in the southern part of the country. Vardzia is the largest and best-known among them.<BR><BR>
            Located near the town of Aspindza, not far from Akhaltsikhe, the Vardzia complex consists of a 500-metre-long sheer rock wall puckered with more than 640 separate chambers spread over 13 levels. Incredibly, this is just one section of a much-larger cave city that was partially destroyed by an earthquake.<BR><BR>
            Built to house a community of monks and shelter townsfolk from invading forces, Vardzia was a self-contained city with its own kitchens, gardens, vineyards, pharmacies, and an elaborate irrigation system. A self-guided walking tour of Vardiza’s stone galleries reveals evidence of copper pipes and bread ovens.<BR><BR>
            There’s also a beautiful chapel containing a rare fresco of King (Queen) Tamar, who ruled this part of Georgia at the time of Vardzia’s construction.
            </p>
        </div>
    </div>
    <div class="tbilisicontent">
        <div class="imgcontainer">
            <img src="images/west/tskaltubo.jpg" alt="">
        </div>
        <div class="contentcontainer">
            <h2>TSKALTUBO</h2>
            <p>
            An alternative day trip from Kutaisi, Tskaltubo is a spa resort town just 20 minutes by local bus from the city centre. It’s famous for its radon-carbonate mineral springs – the ‘Waters of Immortality’ – which bubble up from the ground at a pleasant 33-35 degrees Celsius.<BR><BR>
            Much like Borjomi, Tskaltubo rose to prominence in the Soviet era as a destination for state-mandated workers’ respite. During the 1950s, more than 120,000 people visited the balneology resort and its 19 sanatoria every year, and there was even a direct train service from Moscow to Tskaltubo.<BR><BR>
            The small town is built up around an overgrown park with a series of small bathhouses hidden inside. Around the edge of the park, there are a dozen large, elaborate resort buildings – each with grand entrance halls and ballrooms, collanaded terraces, spiralling staircases and domed atriums. Most (but not all) of the sanatoria were abandoned after the fall of the Soviet Union and stripped of anything valuable (tiles, pipes, plasterwork). Nature eventually took over, turning these once-grand buildings into a playground for photographers and urbexers.<BR><BR>
            Tskaltubo has become a popular place to get your wedding photos taken, and you’ll often see large groups here posing for family snaps!<BR><BR>
            In the 1990s, several of the larger sanatoria were used to house IDPs who fled from Abkhazia during the war. Many families still live here today, and it’s important to be mindful of this when exploring – take care not to accidentally walk into someone’s home, and don’t attempt to enter any buildings that are cordoned off (some have been sold to developers).
            </p>
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