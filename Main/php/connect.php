<?php
    $config = parse_ini_file('db.ini');
    $con = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['db']);
    if(!$con){
        die("Failed to connect to Database"); 
    }
    echo "connection!";
    return $con;

    
?>     
