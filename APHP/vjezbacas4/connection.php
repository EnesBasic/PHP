<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ita_app";

try{
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "connection error: " .$e->getMessage();
}

?>
