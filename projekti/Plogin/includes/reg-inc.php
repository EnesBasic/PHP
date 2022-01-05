<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

if(isset($_POST["username"]) && isset($_POST["password"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
           $username = $_POST["username"];
           $password = $_POST["password"];    
        }                   

        if(file_exists("baza.json")){
                $useri = file_get_contents("baza.json");
                $useri = json_decode($useri, true);
        }else{
                $useri = array();
        }

        $useri = array("username" => $username, "password" => $password);
        file_put_contents("baza.json", json_encode("baza.json"));
        header("Location: login.php");
}
?>