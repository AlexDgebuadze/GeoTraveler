<?php
	require_once dirname(__FILE__).'/back-end/php/crud.php';
	require_once dirname(__FILE__).'/back-end/php/user.php';

session_start();
									
$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]);
$mobile = trim($_POST["mobile"]);
$email = trim($_POST["email"]);
$Rusername = trim($_POST["rusername"]);
$Rpassword = trim($_POST["rpassword"]);

$result = $user->insertUser($name,$surname,$mobile,$email,$Rusername,$Rpassword);



if(!$result){
$login_err = "Something is wrong!";
}

?>