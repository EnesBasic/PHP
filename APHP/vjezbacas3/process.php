<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

if(isset($_POST["username"]) && isset($_POST["password"])&& isset($_POST["email"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"])&& !empty($_POST["email"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        
    }
}

?>