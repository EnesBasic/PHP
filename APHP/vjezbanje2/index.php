<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

$host = "localhost";
$dbname = "login_project2";
$username = "root";
$password = "";

$dsn ="mysql:host=$host;dbname=$dbname";

try 
{
    $dbCon = new PDO($dsn, $username, $password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfull";
    $sql = "SELECT * FROM users";
    $users = $dbCon->query($sql);
    foreach($users as $user){
        echo "<li>" .$user["username"]. "</li>";
    }
}catch(PDOException $error){
    echo $error->getCode();
}


?>