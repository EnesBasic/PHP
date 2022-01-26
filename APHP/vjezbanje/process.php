<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

include_once("config.php");

if(isset($_POST['register']))
{
    $con = config::connect();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(insertDetails($con, $username, $email, $password))
    {
     echo "Details inserted successfully";   
    }
}



function insertDetails($con, $username, $email, $password)
{
    $query =  $con->prepare("
    INSERT INTO users (username, email, password)
    VALUES(:username, :email, :password)
    ");

    $query->bindParam(":username", $username);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);

    return $query->execute();
}

?>