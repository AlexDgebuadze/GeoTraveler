<?php
session_start(); 
          
require_once dirname(__FILE__).'/back-end/php/crud.php';
require_once dirname(__FILE__).'/back-end/php/user.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $result = $user->getUserbyUsername($_SESSION["username"]);
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

<label for="firstname">Name</label>
<input type="text" class="form-control" value="<?php echo $result['name'] ?>" id="firstname" name="firstname">

<br></br>
<label for="surname">Surname</label>
<input type="text" class="form-control" value="<?php echo $result['surname'] ?>" id="surname" name="surname">

<br></br>
<label for="mobile">mobile</label>
<input type="text" class="form-control" value="<?php echo $result['mobile'] ?>" id="mobile" name="mobile">


<br></br>
<label for="mail">email</label>
<input type="text" class="form-control" value="<?php echo $result['email'] ?>" id="mail" name="mail">



</body>