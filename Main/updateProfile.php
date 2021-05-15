<?php
	require_once dirname(__FILE__).'/back-end/php/crud.php';
	require_once dirname(__FILE__).'/back-end/php/user.php';

session_start();
$id = $_SESSION["userID"];									
$name = trim($_POST["Uname"]);
$surname = trim($_POST["Usurname"]);
$mobile = trim($_POST["Umobile"]);
$email = trim($_POST["Uemail"]);

$result = $user->editUser($id,$name,$surname,$mobile,$email);


if(!$result){
  $_SESSION["messg"] = "Something is wrong!";
echo '<script>window.location.href=\'userProfile.php\'; alert("Something is wrong!")</script>';
// exit;

}else{
  $_SESSION["messg"] = "your profile has been successfully updated!";
    session_start();
    echo '<script>window.location.href=\'userProfile.php\'; </script>';
}

?>