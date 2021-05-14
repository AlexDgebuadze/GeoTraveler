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
$profileUpdateMessage = "Something is wrong!";

header("location: userProfile.php");
exit;

}else{
    $profileUpdateMessage = "your profile has been successfully updated!";

    session_start();
    header("location: userProfile.php");
		exit;
}

?>