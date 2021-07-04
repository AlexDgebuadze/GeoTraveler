<?php
	session_start();
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: index.php");
		exit;
	}

	
	require_once dirname(__FILE__).'/back-end/php/crud.php';
	require_once dirname(__FILE__).'/back-end/php/user.php';
	//require_once dirname(__FILE__).'/signup.php';

	$username = $password = "";
	$username_err = $password_err = $login_err = "";
	 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	 
		if(empty(trim($_POST["username"]))){
			$username_err = "Please enter username.";
		} else{
			$username = trim($_POST["username"]);
		}
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["password"]);
		}
	
		$new_password = md5($password.$username);
		
		if(empty($username_err) && empty($password_err)){
		$result = $user->getUser($username, $new_password);
	
		if(!$result){
		   $login_err = "Username or Password is incorrect!";
		}else{
            $userID = $user->getUserbyUsername($username);

			$_SESSION["loggedin"] = true;
			$_SESSION["userID"] = $userID['id'];
			$_SESSION["username"] = $username;
	
			session_start();
			 header("location: index.php");
		}
	}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP - OOP Login and Sign Up using Ajax/jQuery</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div style = 'margin-top: 50px;' class="container">
	<div style="height:50px;">
	<a style = "font-size: 20px;" href="index.php">< Back</a>
	</div>
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login
                    	<span class="pull-right"><span class="glyphicon glyphicon-pencil"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="signup">Sign up</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" role="form" id="logform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="username" id="username" type="text" autofocus>
								<span id="usernameErr"><?php echo $username_err; ?></span>
							</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="password" id="password" type="password">
								<span id="passErr"><?php echo $password_err; ?></span>
							
							</div>
							<span style="color:red; margin-bottom : 5px;" id="loginErr"><?php if(!empty($login_err)){echo  $login_err;} ?></span> 
							<br></br>
                        	<button id="loginB" type="submit" class="btn btn-lg btn-primary btn-block" value="Login">Login</button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>


    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Sign Up
                    	<span class="pull-right"><span class="glyphicon glyphicon-log-in"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="login">Login</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form action="signup.php" method="POST" role="form" id="signform">
                    	<fieldset>
						    <div class="form-group">
                            	<input class="form-control" placeholder="Name" name="name" id="name" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Surname" name="surname" id="surname" type="text" >
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Mobile" name="mobile" id="mobile" type="text" >
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Email" name="email" id="email" type="text" >
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="rusername" id="rusername" type="text" >
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="rpassword" id="rpassword" type="password">
                        	</div>
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-check"></span> <span id="signtext">Sign Up</span></button>
							
						</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"><?php echo $login_err; ?> </span></center>
    		</div>
   	 	</div>
    </div>
</div>
<script>
var signup = document.getElementById('signupbutton');
signup.onclick = function(){

setTimeout(function(){
	window.location.replace('loginForm.php');
},3000);
}

</script>
<script src="js/login.js"></script>
</body>
</html>