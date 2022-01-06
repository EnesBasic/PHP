<?php
 ini_set('error_reporting', E_ALL);
 ini_set( 'display_errors', 1 );

 if(isset($_POST["uname"])&& isset($_POST["pass"])){
     if(!empty($_POST["uname"]) && !empty($_POST["pass"])){
         $unam = $_POST["uname"];
         $passw = $_POST["pass"];
     }

     if(file_exists("bazna.json")){
         $korisnici = file_get_contents("bazna.json");
         $korisnici = json_decode($korisnici, true);
     }else{
         $korisnici = array();
     }

     $korisnici = array("uname" => $unam, "pass" => $passw);
     file_put_contents("bazna.json", json_encode("bazna.json"));
     header("Location: ../login.php");

 }
?>