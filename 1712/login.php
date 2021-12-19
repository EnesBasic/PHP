<?php

$korsinici = array(
    array("username"=> "amar", "password" => "1234"),
    array("username"=> "enes", "password" => "5678"),
    array("username"=> "adis", "password" => "9012")
);

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        foreach($korsinici as $korisnik){
            if ($korisnik["username"] === $username && $korisnik["password"] === $password){
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["logged"] = date("d.m.Y H:i:s");
                header("Location: dashboard.php");}

            else{header("Location: index.php?error = pogresni!");}}
        }         
            
    else{header("Location: index.php?error = username ili password su prazni!");}}
else{header("Location: index.php?error = username ili password nisu poslani!");}

?>