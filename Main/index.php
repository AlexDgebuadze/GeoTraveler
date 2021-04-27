<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: contactus.php");
    exit;
}
 
require_once 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main\back-end\php\crud.php';
require_once 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main\back-end\php\user.php';

$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
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
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $id;
        $_SESSION["username"] = $username;

        session_start();
        header("location: contactus.php");
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet"> <!--Google ფონტები Nav-Bar-სთვის-->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet"> <!--EXPLORE GEORGIA-სთვის-->

    <title>GeoTraveler</title>
</head>
<body>
    <NAV>
        <div class="logo">
            <a href="index.php"><h3>GeoTraveler</h3></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php"> Main </a></li>
            <li><a href="#"> Destination </a></li>
            <li><a href="#"> Plan Your Trip </a></li>
            <li><a href="AboutGeorgia.html"> About Georgia </a></li>
            <li><a href="contactus.php"> Contact Us </a></li>
            <li><label id="LoginF" for="show" class="show-btn">Login</label></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </NAV>
    <!-- ბურგერ მენიუს სკრიპტი -->
    <script src="js/burger.js"></script>
    <div class="containter">
        <div class="banner">
        </div>
        <div class="title">
            <h1>EXPLORE GEORGIA</h1>
        </div>
        <div class='center'>
            <input type="checkbox" id="show">
            <!-- <label for="show" class="show-btn">Sign In</label> -->
            <div class='SignUpContainer'>
                <label id= "closeForm" for="show" class="close-btn fas fa-times">X</label>
                <div class="SignUpText">
                    Login Form
                </div>
                <form action="<?php if(empty($username_err)&& empty($password_err)&& empty($login_err)){echo htmlspecialchars($_SERVER["PHP_SELF"]);}  ?>" method="POST">
                    <div class="data">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span id="usernameErr"><?php echo $username_err; ?></span>
                    </div>
                    <div class="data">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span id="passErr"><?php echo $password_err; ?></span>
                    </div>
                    <div class="forgot-pass"><a href="#">Forgot Password?</a></div>

                    <span style="color:red;" id="loginErr"><?php if(!empty($login_err)){echo $login_err;} ?></span>

                    <div class="SignUpbtn">
                        <div class="inner"></div>
                        <!-- <input type="submit" class="btn btn-primary" value="Login"> -->
                        <button id="loginB" type="submit" class="btn btn-primary" value="Login">LogIn</button>
                    </div>
                    <div class="signUp-link">Not a member? <label for="show2">SignUp Now</label></div>
                </form>
            </div>
        </div>
        <div class="center2">
            <input type="checkbox" id="show2">
            <!-- <label for="show2" class="show-btn2"></label> -->
            <div class="SignUpContainer2">
                <label for="show2" class="close-btn2">X</label>
                <div class="SignUpText2">SignUp Form</div>
                <form action="#">
                    <div class="data2">
                        <label>Email</label>
                        <input type="text" required>
                    </div>
                    <div class="data2">
                        <label>Username</label>
                        <input type="text" required>
                    </div>
                    <div class="data2">
                        <label>Password</label>
                        <input type="password" required>
                    </div>
                    <div class="data2">
                        <label>Repeat password</label>
                        <input type="password" required>
                    </div>
                    <div class="SignUpbtn2">
                        <div class="inner2"></div>
                        <button type="submit">Register</button>
                    </div>
                    <div class="signIn-Link">Already a member? <label for="show2">SignIn Now</label></div>
                </form>
            </div>
        </div>
    </div>
    <div class="select-container">
        <h1>Plan Your Trip</h1>
        <!-- <h2>Where To Go</h2> -->
        <div class="select-box">
            <h2>Where To Go</h2>
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="Tbilisi" name="Category" value="Tbilisi">
                    <label for="Tbilisi">Tbilisi</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Kutaisi" name="Category" value="Kutaisi">
                    <label for="Kutaisi">Kutaisi</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Batumi" name="Category" value="Batumi">
                    <label for="Batumi">Batumi</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Mcxeta" name="Category" value="Mcxeta">
                    <label for="Mcxeta">Mcxeta</label>
                </div>
            </div>
            <div class="selected">
                Select where to go
            </div>
            <div class="search-box">
                <input type="text" placeholder="Type City...">
            </div>
        </div>
        <!-- <h2>What To Do</h2> -->
        <div class="select-box">
            <h2>What To Do</h2>
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="Swim" name="Category" value="Swim">
                    <label for="Swim">Swimming</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Hike" name="Category" value="Hike">
                    <label for="Hike">Hiking</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Camp" name="Category" value="Camp">
                    <label for="Camp">Camping</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="Climb" name="Category" value="Climb">
                    <label for="Climb">Climbing</label>
                </div>
                
            </div>
            <div class="selected">
                Select what to do
            </div>
            <div class="search-box">
                <input type="text" placeholder="Type Activity...">
            </div>
        </div>
        <input type="submit" value="Upload" class="Select-Button">
    </div>
    <!-- select-ის სკრიპტი -->
    <script src="js/select.js"></script>
    <div class="text">
        <h3>IN THE SPOTLIGHT</h3>
        
    </div>
   
    <div class="container p-3">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                <div class="card-img" style="background-image:url('images/skiing.jpg')"></div>    
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <h4 class="card-title">Skiing resorts</h4>
                    <p class="card-text oswald">Read more</p>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                <div class="card-img" style="background-image:url('images/seaside.jpg')"></div>    
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <h4 class="card-title">Seaside</h4>
                    <p class="card-text oswald">Read more</p>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                <div class="card-img" style="background-image:url('images/wine.jpg')"></div>    
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <h4 class="card-title">Georgian vineyard</h4>
                    <p class="card-text oswald">Read more </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="js/login.js"></script>
</html>
