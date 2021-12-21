<?php

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $korisnici = file_get_contents("korisnici.json");
        $korisnici = json_decode($korisnici, true);

        $user_logged = 0;
        foreach($korisnici as $korisnik){
            if($username === $korisnik["username"] && $password === $korisnik["password"]){
                session_start();
                $_SESSION["username"] = $korisnik["username"];
                $_SESSION["logged"] = date("d.m.Y H:i:s");
                header("Location: dashboard.php");
                return;
            }
        }
        if($user_logged == 0){
            header("Location: index.php?error = pogresno!");
        }
    }else{
        header("Location: index.php?error = prazno!");
    }
}else{
    header("Location: index.php?error = nisu poslani!");
}

?>