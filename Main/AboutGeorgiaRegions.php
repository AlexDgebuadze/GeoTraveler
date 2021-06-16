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
    <link rel="stylesheet" href="css/tagcss.css">
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
            <div class="Regionimg"><img src="images/imereti.png" alt=""></div>
            <p>Imereti is the central region where Kutaisi is located, which was the original capital city of Georgia. It’s also home to the other main airport besides Tbilisi International Airport. (This airport is more oriented to flights in Europe and it is a bit far from the city of Kutaisi, so you’ll need to arrange a bus or airport transfer.) This is a beautiful historic region, with misty mountains and stunning centuries-old churches. For example, one of the most spectacular churches is the Gelati Monastery. This religious site was built between the 12th and 13th centuries. It’s known for its gorgeous mosaics and the beautiful fresco depicting Saint Mary with Baby Jesus in her hands. In the Imereti region, you can explore many fascinating hiking spots, such as the Prometheus Cave – a huge and spectacular natural cave formation. You can also visit the amazing Sataplia Cave, where actual dinosaur footprints have been found. Imeriti is also known for being home to the spa resort Sairme, which lies in Bagdati Municipality. It’s famous for its natural hot and cold mineral water springs. Also, head to Shrosha Village, which is popular for its clay production. You can find everything here, from small cups and bowls to huge qvevri – the clay vessels designed for storing traditional Georgian wine. You can also explore the town of Chaitura, famous for its cable cars. The Soviets built 76 of these cable cars, designed to transport workers and materials to the mines. 18 of them are still in operation and 11 of them still transport passengers. Tskaltubo is also a fascinating place to visit in Imereti. It’s a former spa town that is now in disrepair. It used to have over 100,000 visitors per year – people who came mostly from Russia to enjoy the healing mineral water of the bath houses. Today, the town is abandoned. However, it’s still a popular destination for urban explorers who like to wander through the empty sanatoriums. (Here’s a great post with some beautiful photos of Tskaltubo.)</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Region">
        <h1>Kakheti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Kakheti.png" alt=""></div>
            <p>This region is known for pretty countryside, charming villages and lots and lots of delicious wine. It is located in the East of Georgia and is a popular place with tourists. Kakheti is considered the “Cradle of Wine” – the location where the drink itself was invented. There are hundreds of historic wineries here, many of them passed down through families for generations. Kakheti is where you’ll find many of Georgia’s most intriguing attractions, including the David Gareja cave monastery and the remote and wild Tusheti National Park. One of the most beloved spots in this region is Sighnaghi – a pretty Italian-style town located in the middle of pretty green hills overlooking the Alazani Valley (the largest wine region of Georgia). It’s a delight to wander around the cobbled streets and admire the ornate balconies and quiet piazzas. It is a great place to start one of the famous wine-making tours and it’s also a popular wedding venue. Kakheti is also known for being home to Vashlovani National Park – a stunning nature reserve. I tried to visit this beautiful national park once with some friends and got hopelessly lost. You can read that story here.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Region">
        <h1>Guria</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Guria.png" alt=""></div>
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
                <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
            </div>
        
    </div>
    <div class="Region">
        <h1>Qvemo Qartli</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Qvemo-Qartli.png" alt=""></div>
            <p>This region is close to Tbilisi and it is home to the famous David Gareja Monastery. This makes it a very popular location for day trips from the capital – and you’ll see many tour groups in Tbilisi offering this on their itinerary. The capital of Kvemo Kartli is Rustavi and this region is one of the most economically developed in Georgia. Other main cities in the region include Bolnisi, Gardabani, Dmanisi and Tetritskaro. If you love the outdoors there are many activities that can be organized here – such as horse riding tours and archeological tours in Algeti National park and canyoning in Birtvisi Canyon. You can also visit Samshvilde, which is one of the oldest historical walled towns in Georgia. The ancient town was the domain of the feudal lords since the foundation of the Kingdom of Kartli. Visit Bolnisis Sioni, a basilica that dates back to the 5th century. If you’re still even more curious about the history of the region, you can visit the Kolalgiri Fortress – which was built at the end of the 18th century by Queen Darejan.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Region">
        <h1>Racha Lechkhumi Qvemo Svaneti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Racha-Lechkhumi-QvemoSvaneti.png" alt=""></div>
            <p>The territory of the historical Georgian region of Racha is today part of Kvemo Svaneti and Racha-Lechkhumi. It is a spectacular highland region located in the northwest, surrounded by the Greater Caucasus mountains. A small town called Ambrolaurihe is the administrative centre of the region. The delicious food of Racha is famed throughout Georgia. The baked bread and the chicken with garlic sauce (aka. Shkmeruli) are specialties. It also boasts unspoiled natural beauty: rushing rivers, coniferous forests and tranquil lakes. It doesn’t have a lot of major “tourist attractions” – the main thing to do here is wander through the stunning landscapes and enjoy the food and wine. Shaori Lake is one of the most beautiful natural reserves in the region, located 1,100 metres above sea level and perfect for camping and fishing. You can also hike up to Nikortsminda, a pretty mountain village with a cathedral of the same name, constructed over 1,000 years ago during the reign of King Bragrat III. Racha is also home to a spectacular sight you might recognize from postcards of Georgia – an ancient chapel perched precariously on the top of a thin, towering limestone pillar. A Christian ascetic constructed this strange chapel. He believed that by living on top of the pillar, he would be closer to God.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Region">
        <h1>Samegrelo Zemo Svaneti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Samegrelo-ZemoSvaneti.png" alt=""></div>
            <p>Samegrelo is a historical - geographical side of western Georgia that covers the territories between the rivers Rioni, Tskhenistskali, Enguri and the Black Sea. Its central city is Zugdidi. The Samegrelo region had a great strategic importance throughout its history, because of this, it became the object of numerous invasions by armies of the Romans, Byzantines, Mongols, Turks, Persians, Russians and others. This region is rich in cultural monuments of different eras and impressive nature, blue lakes and very beautiful canyons. Georgia is very rich in landscapes, marvelous nature or centuries - old cultural monuments, and in this diversity, Samegrelo truly takes an honorable place. Ancient settlements, unique temples, and fortresses tell wonderful stories or myths, and the limit between legend and reality disappears. This side is a true oasis with beautiful valleys, waterfalls, lowlands or alpine lakes and many fascinating caves. Tobavarchkhili, which is tucked into the rocks creates an unforgettable impression for all visitors. Samegrelo also has an endemic species of Kolkheti National Reserve. It is impossible not to be surprised by the multitone rock called Kuakantsalia, because a simple touch is enough to make this rock shake. As you can see, people of different tastes can find their own little paradise in this area.<br><BR>
            Svaneti is an ancient land, the home of the Svans. The entire region is a UNESCO World Heritage Site.There are hundreds of beautiful stone watchtowers, once protecting the villages from invaders. This surreal land of craggy peaks, traditional dances, stone towers and wine is where a unique culture has survived for thousands of years. The Svan language is even 1000 years older than Georgian! This region in the Northwest is remote and difficult to get to. Road conditions can sometimes make it inaccessible – it wasn’t even reachable by car until 1935. It is so far away and inaccessible that it was never tamed by any ruler. This remoteness is also why the unique culture and traditions of Svaneti have survived for so long. The locals still plow their fields by hand and livestock freely roam the streets. If you venture to Ushguli on a day hike, you’ll see a collection of four villages that make up the highest permanent settlement in Europe.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Region">
        <h1>Samtskhe-Javakheti</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Samtskhe-javakheti.png" alt=""></div>
            <p>Samtskhe Javakheti was formed in 1995, in response to the conflict in South Ossetia and the secession of Abkhazia. The region was established by merging two regions of Georgia, Javakheti and Samtskhe. This region is located in the south with smaller mountains and the famous cave city of Vardzia. It’s name comes from the fact that it is the home of the Javakhs, an ethnic subgroup of Georgians. This beautiful region is packed with history. You can visit the Rabati Fortress, which has been destroyed and rebuilt countless times and bears the marks of many different religions and cultures throughout the ages. The name of this historic site comes from Arabic and means “fortified place.” Another one of the most interesting attractions in this region is Vardzia, which is an elaborate monastery that was carved into caves along a cliff. Here you can see a stunning series of wall paintings, dating back to the golden age of Georgia in the 12th century. Samtskhe Javakheti is also home to the resort town of Borjomi. If you’ve been in Georgia for a while, you’ve probably seen bottles of Borjomi sparkling mineral water in the shops or restaurants. The water here is believed to have healing properties and the resort is a popular destination for people with health problems. You can also visit Borjomi National Park. It’s a beautiful and ecologically diverse park that was used by the local aristocracy for hunting in Medieval Times.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
            </div>
    </div>
    <div class="Region">
        <h1>Shida Qartli</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="images/Shida-qartli.png" alt=""></div>
            <p>Shida Kartli is a landlocked region in eastern Georgia that contains many popular sights, including Uplistsikhe Caves, the Ateni Sioni Church and the town of Gori (the capital). The Uplistsikhe Caves are one of the most spectacular sites.Their name translates as “Lord’s Fortress” and it is an abandoned rock-hewn town that played a very important role in Georgian history. It was built in the late Bronze Age (approximately 1000 BC) and was inhabited until the 13th century AD. Archeologists have even found evidence that the locals worshipped a sun goddess here, well before Christianity arrived. The Ateni Sioni Church is also a fascinating destination here – constructed in the early 7th century. It is a Georgian Orthodox church and its name comes from Mount Zion in Jerusalem. The inscriptions in the walls are written in one of the earliest versions of the Georgian alphabet, dating all the way back to 835. Gori is also an interesting destination for those who want to learn more about the history of Stalin. He was born in this town and there is a museum there dedicated to his life. But there’s so much more to Gori than just Stalin! If you’d like to learn more about this city, you can take the Gori Free Walking Tour. It takes you to hidden gems in the town that most tourists miss – so you can learn about the history. Note: be aware that Shida Kartli is close to the Russian border and the conflict area of South Ossetia.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="Region">
        <h1>Ajara</h1>
        <div class="RegionAbt">
            <div class="Regionimg"><img src="/images/Ajara.png" alt=""></div>
            <p>Adjara is a beautiful historical region of Georgia, which is located on the Black Sea Coast. The landscapes are mostly mountains and ravines and the climate is mild and warm, due to its low altitude and proximity to the sea. One of the most popular attractions in Adjara is Batumi, a lovely Georgian seaside town. Surrounded by mountains, it’s located on the sparkling blue Black Sea and boasts a subtropical climate. You can take a walk along the Batumi Boulevard, a long four-plus mile stretch along the coast. You’ll see the famous moving sculpture of Ali and Nino, based on the love story written by Kurban Said. Then, climb the Alphabetic Tower – a huge tower decorated with letters from the Georgian alphabet and offering panoramic views of the ocean and the city of Batumi. While you’re there, you should also try an Adjarian Khachapuri – the style of baked cheese bread specific to this region. The warm, soft bread is shaped like a boat and filled with melted cheese and an egg. If you want to work off all the calories from your khachapuri, you can go exploring in one of the beautiful national parks in the area. There’s Mtirala National Park, which has several camping spots. Or, you can visit Machakhela National Park – known for its historical monuments such as wine presses, fortresses and arch bridges.</p>
            <div class="tagcontainer2">
                <div class="tgbtn">
                    <a href="">Art</a>
                </div>
                <div class="tgbtn">
                    <a href="">Architecture</a>
                </div>
                <div class="tgbtn">
                    <a href="">Climbing</a>
                </div>
                <div class="tgbtn">
                    <a href="">Hiking</a>
                </div>
                <div class="tgbtn">
                    <a href="">Swimming</a>
                </div>
                <div class="tgbtn">
                    <a href="">Museums</a>
                </div>
                <div class="tgbtn">
                    <a href="">Riding</a>
                </div>
                <div class="tgbtn">
                    <a href="">Kayaking</a>
                </div>
            </div>
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