<?php
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'alex');
// define('DB_PASSWORD', 'root');
// define('DB_NAME', 'geotraveler');

// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// $mypath = 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main';
$host = 'localhost';
$db = 'geotraveler';
$user = 'alex';
$pass = 'root';
$charset = 'utf8mb64';

$dsn = "mysql:host = $host; dbname = $db; charset = $charset";

try {
    $pdo = new PDO($dsn , $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

// require_once 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main\back-end\php\crud.php';
// require_once 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main\back-end\php\user.php';

require_once 'crud.php';
require_once 'user.php';


$crud = new crud($pdo);
$user = new user($pdo);

?>