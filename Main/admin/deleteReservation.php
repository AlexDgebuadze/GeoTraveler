
<?php
 require_once '../back-end/php/crud.php';
 session_start();



$crud ->deleteReservation($_GET["resID"]);
$roomid = $_GET['roomID'];
$hotelid = $_GET['hotelID'];
$crud->deleteReservation($_GET["resID"]);
$crud->markRoomUnreserved($hotelid,$roomid);

header('location:index.php?page=booked');
?>