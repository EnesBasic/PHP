<?php


$usernameDB = "Enes";
$passwordDB = "1234";

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username === $usernameDB && $password === $passwordDB ){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["logged"] = date("d.m.Y H:i:s");
            header("Location: dashboard.php");}

            else{header("Location: index.php?error = pogresni");}}
    else{header("Location: index.php?error = prazni");}}
else{header("Location: index.php?error = nisu poslani");}

?>