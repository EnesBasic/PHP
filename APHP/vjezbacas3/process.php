<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

if(isset($_POST["username"]) && isset($_POST["password"])&& isset($_POST["email"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"])&& !empty($_POST["email"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        if (strlen($username) > 100 || strlen($password) > 256 || strlen($email) > 50){
            header("Location: index.php?message=Jedno od polja je predugacko...");
        }
        $username = trim($username);
        $password = trim($password);
        $email = trim($email);

        $connection  = new mysqli("localhost", "root", "", "user");
        if($connection->connect_error){
            header("Location: index.php?message=".$connection->connect_error);
        }

        $sql = "INSERT INTO user (username, password, email)
        VALUES '{$username}', '{$password}', '{$email}'";

        if($connection->query($sql) === TRUE){
            header("Location: index.php?message=User registered successfully!");
        }else{
            header("Location: index.php?message=Error while registering user!");
        }



    }

}

?>