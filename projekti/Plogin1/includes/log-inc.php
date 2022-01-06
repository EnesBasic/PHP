<?php

if(isset($_GET['error'])){
    echo "<div> ".$_GET['error']."</span>";
}

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        file_get_contents("baza.json");
        $useri = json_decode($useri, true);
    }

    foreach($useri as $user){
        if($username($_POST["username"]=== $user) && $password($_POST["password"]=== $user)){
            session_start();
            $_SESSION["username"] = $user["username"];
            $_SESSION["password"] = $user["password"];
            header("Location: login.php");
        }
    }

}
?>