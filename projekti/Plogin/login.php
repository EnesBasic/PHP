<?php

//ini_set('error_reporting', E_ALL);
//ini_set( 'display_errors', 1 );

$korisnici = array("username" => "enes", "password" => "123");

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!$empty($_POST["username"]) && !$empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        foreach($korisnici as $korisnik){
            if(($korisnici["username"] == true) && ($korisnici["password"] == true)){
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                header("Location: dashboard.php");
                return;
            }
        }

    }
}



?>