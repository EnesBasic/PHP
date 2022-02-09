<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$database = "ita_app";

try{
    $connection = new PDO ("mysql:host=$servername; dbname=$database", $username, $password);
    $connection -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection established";
}catch(PDOException $e){
    echo "connection error: " .$e->getMessage();
}

?>
