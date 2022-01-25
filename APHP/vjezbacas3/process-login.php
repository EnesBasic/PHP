<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );


if(isset($_POST["username"]) && isset($_POST["password"])&& isset($_POST["email"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"])&& !empty($_POST["email"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(strlen($email)>50 || strlen($password)>256){
            header("Location: login.php?message=Jedni polje je predugacko!");
            
        }


    }
}

?>