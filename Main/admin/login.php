<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Hotel Management System</title>
<meta content="" name="descriptison">
  <meta content="" name="keywords">

  

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


<?php
	session_start();
	 require_once '../back-end/php/crud.php';
	$username = $password = "";
	$username_err = $password_err = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
	 
		if(empty(trim($_POST["adminUsername"]))){
			$username_err = "Please enter username.";
		} else{
			$username = trim($_POST["adminUsername"]);
		}
		
		if(empty(trim($_POST["AdminPassword"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["AdminPassword"]);
		}
	
		$new_password = md5($password.$username);
		
		if(empty($username_err) && empty($password_err)){
		$result = $crud->getAdminUser($username, $new_password); 
	
		if(!$result){
		   $login_err = "Username or Password is incorrect!";
		}else{
            $userID = $crud->getAdminUserbyUsername($username);

			$_SESSION["Adminloggedin"] = true;
			$_SESSION["AdminUserID"] = $userID['id'];
			$_SESSION["AdminUsername"] = $username;
	
			session_start();
			 header("location: index.php?page=booked");
		}
	}
}
	

?>




</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#00000061;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
	    margin: auto;
	    font-size: 8rem;
	    background: white;
	    padding: .5em 0.8em;
	    border-radius: 50% 50%;
	    color: #000000b3;
	}
	#login-left {
	  background: url(./assets/img/the_paradise_bg.jpg);
	  background-repeat: no-repeat;
	  background-size: cover;
	}
</style>

<body>

  <main id="main" class=" alert-info">
  		<div id="login-left">
  		</div>
  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
				  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" role="form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="adminUsername" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="AdminPassword" class="form-control">
  						</div>	
  						<!-- <button  type="submit" name="submit" value="Submit" class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button> -->
						  <input type="submit" name="submit" value="Submit">  
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
</html>
