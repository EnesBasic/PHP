<?php

ini_set ('display_errors', TRUE);
ini_set ('log_errors', TRUE);
ini_set ('display_startup_errors', TRUE);
ini_set ('error_reporting', E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "ita_app";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection established";
    $sql = $conn-> prepare("SELECT * FROM user");
    $sql->execute();

    $result = $sql->setFechMode(PDO::FETCH_ASSOC);
    $results = $sql->fetchAll();
    var_dump($results);

}catch(PDOException $e){
    echo "connection error: " .$e->getMessage();
}

$conn = null;
?>
