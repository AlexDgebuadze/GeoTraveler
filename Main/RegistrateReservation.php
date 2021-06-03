<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start();
$uid = $_SESSION["userID"];
$hotelid =  $_SESSION["hotelid"];
$roomid =  $_SESSION["roomid"];
$checkI =  $_SESSION["checkin"];
$checkO =  $_SESSION["checkout"];
$crud->createReservation($hotelid,$roomid,$uid,$checkI,$checkO);
$crud->markRoomReserved($hotelid,$roomid);
header("location: userProfile.php");
session_start();


?>