<?php 
 require_once '../back-end/php/crud.php';
session_start();



if($_SERVER["REQUEST_METHOD"] == "POST"){								

$descr = trim($_POST["roomDescr"]);
$cost = trim($_POST["cost"]);
$hotelid = trim($_POST["hotelid"]);
$roomCategory = trim($_POST["roomCategory"]);
$rnum = trim($_POST["roomNum"]);
$pnum = trim($_POST["personNum"]);

$imgData = file_get_contents($_FILES['img']['tmp_name']);

$crud->addNewRoom($imgData,$descr,$hotelid,$cost,$roomCategory,$rnum,$pnum);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/DataTables/datatables.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">
  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/DataTables/datatables.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/font-awesome/js/all.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>


	<title>new hotel</title>
</head>
<style>
	body{
        background: #80808045;
  }
  nav#sidebar {
    background: url(../assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body>
<nav id="sidebar" class='mx-lt-5' >
		
		<div class="sidebar-list">

				<a href="../index.php" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=booked" class="nav-item nav-booked"><span class='icon-field'><i class="fa fa-book"></i></span> Booked </a>
				<a href="index.php?page=hotelPage" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span>Hotels</a>
				<a href="index.php?page=rooms" class="nav-item nav-rooms"><span class='icon-field'><i class="fa fa-bed"></i></span>Rooms</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<i class="fa fa-building"></i>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>
        <?php //echo $_SESSION['setting_hotel_name']; 
        ?>
        </b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="../logout.php" class="text-white">
        <?php echo $_SESSION['AdminUsername'] ?> 
        <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>

<main id="view-panel" >

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

<div class="form-group">
  <input type="file" id="img" name="img" accept="image/jpg">
  </div>
  <div class="form-group">
  <input class="form-control" placeholder="room description" name="roomDescr" id="roomDescr" type="text" >
  </div>
  <div class="form-group">
  <input class="form-control" placeholder="hotel id" name="hotelid" id="hotelid" type="text" >
  </div>
  <div class="form-group">
  <input class="form-control" placeholder="cost" name="cost" id="cost" type="text">
  </div>
  <div class="form-group">
  <input class="form-control" placeholder="room category" name="roomCategory" id="roomCategory" type="text">
  </div>
  <div class="form-group">
  <input class="form-control" placeholder="room number" name="roomNum" id="roomNum" type="text">
  </div>
  <div class="form-group">
  <input class="form-control" placeholder="person number" name="personNum" id="personNum" type="text">
  </div>
  <input type="submit" name="submit" value="Submit">  
</form>



</main>

	
</body>
</html>

	
