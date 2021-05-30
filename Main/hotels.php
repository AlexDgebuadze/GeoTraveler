<?php

require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start(); 
//$res = $crud->getAllHotels();

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
    }
    $total_records_per_page = 4;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";


//    $total_records = $crud -> countHotels();
//    $total_records = $total_records['total_records'];
//    $total_no_of_pages = ceil($total_records / $total_records_per_page);
//    $second_last = $total_no_of_pages - 1;


   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
        $reg = trim($_POST["regionValue"]); 
        $tag = trim($_POST["tagValue"]);

        $Pfrom = trim($_POST["fromPriceValue"]); 
        $Pto = trim($_POST["toPriceValue"]); 


    $total_records = $crud -> getHotelFromSearchCount($reg,$tag,$Pfrom,$Pto);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;
    
    $res = $crud -> getHotelFromSearch($reg,$tag,$Pfrom,$Pto);

   
   }else{
    $total_records = $crud -> countHotels();
    // $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;
    $res = $crud->getHotelFrom($offset, $total_records_per_page);
   }





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
    <link rel="stylesheet" href="rooms.css">
    <link rel="stylesheet" href="hotels.css">
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
    </div>

<main>
        <div class="hotelhero">
            <div class="main">
                <img src="./images/hotelbanner.png" style = "width:100%;">
                <!-- <div class="main-heading">
                    <h1 class="title">Discover</h1>
                    <h2 class="subtitle">Hotels</h2>
                </div> -->
                <!-- <a href="#" class="btn btn-gradient">Explore now
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a> -->
            </div>
        </div>
    <section class="booking">
            <div class="Container">
                <form action="hotels.php" class="form" method="POST">
                    <div class="input-group">
                        <label for ="destination" class="input-label">Choose Region</label>
                        <!-- <input type="text" class="input" id = "destination"> -->
                        <select id="adults" name="regionValue" style = "background-color: white;" class="options">
                            <option Choose value="Adjara">Any</option>
                            <option value="Adjara">Adjara</option>
                            <option value="Abkhazia">Abkhazia</option>
                            <option value="Tbilisi">Tbilisi</option>
                            <option value="Imereti">Imereti</option>    
                            <option value="Kvemo Kartli">Kvemo Kartli</option>
                            <option value="Samegrelo and Zemo Svaneti">Samegrelo and Zemo Svaneti</option>
                            <option value="Kakheti">Kakheti</option>
                            <option value="Shida Kartli">Shida Kartli</option>
                            <option value="Samtskhe-Javakheti">Samtskhe-Javakheti</option>  
                            <option value="Guria">Guria</option>
                            <option value="Mtskheta-Mtianeti">Mtskheta-Mtianeti</option>
                            <option value="Racha-Lechkhumi and Kvemo Svaneti">Racha-Lechkhumi and Kvemo Svaneti</option>
                        </select>
                    </div>
                    <!-- <div class="input-group">
                        <label for ="check-in" class="input-label">Check in</label>
                        <input type="date" class="input" id = "check-in">
                    </div>
                    <div class="input-group">
                        <label for ="check-out" class="input-label">Rooms</label>
                        <select id="adults"  style = "background-color: white;" class="options">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div> -->

                    <div class="input-group">
                        <label for ="check-out" class="input-label">Tags</label>
                        <select id="adults" name="tagValue" style = "background-color: white;" class="options">
                            <option value="Anything">Anything</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Arctic Wildlife">Arctic Wildlife</option>
                            <option value="Art">Art</option>
                            <option value="History">History</option>
                            <option value="Hot Springs">Hot Springs</option>
                            <option value="Music">Music</option>
                            <option value="Wildlife tours">Wildlife tours</option>
                        </select>
                    </div> 

                    <div class="input-group">
                        <label for ="adults" class="input-label">Price From</label>
                        <input name="fromPriceValue" type="text" class="input" id = "check-out" value = "0"></input>
                    </div>
                    <div class="input-group">
                        <label for ="children" class="input-label">Price To</label>
                        <input name="toPriceValue" type="text" class="input" id = "check-out" value = "100000"></input>
                    </div>
                    <button name="submitBtn" type ="submit"class="btn form-btn btn-purple">Search
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
            </div>
        </section>
    <section class="rooms">
        <div class="Container">
            <!-- <h5 class="section-head">
                <span class="heading">Our Hotels</span>
                 <span class="sub-heading">Rooms</span>
            </h5> -->




            <div class="grid rooms-grid">

                

                <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                    <?php echo '<img  class="room-image" src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'"/>'; ?> 
                        <h5 class="room-name"><?php echo $row['hotelName']; ?></h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">From $<?php echo $row['minCost']; ?>  <span class="per-night"> Per night</span></span>
                       
                        <p class="paragraph">    
                        <?php echo $row['hotelDescr']; ?>
                        </p>
                        <a href="PaymentForm.php" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>

                <?php }?>
                


            </div>



                <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
            <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
            </div>

            <ul class="pagination">
                <?php if($page_no > 1){
                echo "<li><a href='?page_no=1'>First Page</a></li>";
                } ?>
                    
                <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                <a <?php if($page_no > 1){
                echo "href='?page_no=$previous_page'";
                } ?>>Previous</a>
                </li>
                    
                <li <?php if($page_no >= $total_no_of_pages){
                echo "class='disabled'";
                } ?>>
                <a <?php if($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
                } ?>>Next</a>
                </li>

                <?php if($page_no < $total_no_of_pages){
                echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                } ?>
            </ul>
            

            
        </div>
    </section>
</main>
</body>