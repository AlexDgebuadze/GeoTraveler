
<?php
 require_once '../back-end/php/crud.php';
 session_start();



$crud ->deleteReservation($_GET["resID"]);

header('location:index.php?page=booked');
?>