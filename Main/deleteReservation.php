<?php
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start(); 

$resID = $_GET['resID'];
 $result = $crud->getReservationsByID($resID);
 $res = $result->fetch(PDO::FETCH_ASSOC);
 $roomid = $res['roomID'];
 $hotelid = $res['hotelID'];
 $crud->deleteReservation($resID);
 $crud->markRoomUnreserved($hotelid,$roomid);

 header("location: userProfile.php");
 session_start(); 
?>