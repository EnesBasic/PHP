<?php
 ini_set('error_reporting', E_ALL);
 ini_set( 'display_errors', 1 );

 if(isset($_POST["uname"]) && isset($_POST["pass"])){
     if(!empty($_POST["uname"]) && !empty($_POST["pass"])){
         $username = $_POST["uname"];
         $password = $_POST["pass"];
     }

     if(file_exists("baza.json")){
        $useri = file_get_contents("baza.json");
        $useri = json_decode($useri, true);
     }else{
         $useri = array();
     }

     $useri = array("uname" => $username, "pass" => $password);
     file_put_contents("baza.json",json_encode("baza.json"));
     header("Location: ../login.php");
 }
?>