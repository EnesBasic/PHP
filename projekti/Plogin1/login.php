<?php

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $useri = file_get_contents("baza.json");
        $useri = json_decode($useri, true);

        foreach($useri as $user){
            if($username === $user["username"] && $password === $user["password"]){
                session_start();
                $_SESSION["username"] = $user["username"];
                $_SESSION["password"] = $user["password"];
                header("Location: dashboard.php");
                return;
            }
        }
    }else{header("Location: provjera.php?error=pogresno!");}
}else{header("Location: provjera.php?error=prazno!");}

?>