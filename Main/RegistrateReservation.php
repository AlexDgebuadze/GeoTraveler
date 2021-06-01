<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start();
$crud->createReservation($hotelid,$roomid,$uid,$checkI,$checkO);
header("location: userProfile.php");
session_start();


?>