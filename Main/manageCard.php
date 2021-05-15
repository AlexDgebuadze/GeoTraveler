<?php
	require_once dirname(__FILE__).'/back-end/php/crud.php';
	require_once dirname(__FILE__).'/back-end/php/user.php';

session_start();
$user_id = $_SESSION["userID"];									
$card_number = trim($_POST["cardNum"]);
$exp_date = trim($_POST["expDate"]);
$card_user = trim($_POST["user"]);
$cvv = trim($_POST["cvv"]);

//echo   "card_num " . $card_number . " exp " . $exp_date . " user " . $card_user . " cvv " . $cvv ;

//$result = $user->updateCard($card_number,$exp_date,$card_user,$cvv,$user_id);
if( !($user->getCard($user_id)) ){
    $result = $user->createCard($card_number,$exp_date,$card_user,$cvv,$user_id);
    if(!$result){
        $_SESSION["cardMessg"] = "Something is wrong!";
      echo '<script>window.location.href=\'userProfile.php\';</script>';
      
      }else{
        $_SESSION["cardMessg"] = "your card has been successfully created!";
          session_start();
          echo '<script>window.location.href=\'userProfile.php\'; </script>';
      }

}else{
    $result = $user->updateCard($card_number,$exp_date,$card_user,$cvv,$user_id);
    if(!$result){
        $_SESSION["cardMessg"] = "Something is wrong!";
      echo '<script>window.location.href=\'userProfile.php\';</script>';
      
      }else{
        $_SESSION["cardMessg"] = "your card has been successfully updated!";
          session_start();
          echo '<script>window.location.href=\'userProfile.php\'; </script>';
      }
}



?>