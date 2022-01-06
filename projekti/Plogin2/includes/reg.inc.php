<?php
 ini_set('error_reporting', E_ALL);
 ini_set( 'display_errors', 1 );

 if(isset($_POST["uname"]) && isset($_POST["pass"])){
     if(!empty($_POST["uname"]) && !empty($_POST["pass"])){
         $username = $_POST["uname"];
         $password = $_POST["pass"];
     }else{
        $useri = array("uname" => $username, "pass" => $password);
     }

     if(file_exists("baza.json")){
        $useri = file_put_contents(json_decode("baza.json"));
        $useri = json_decode($useri, true);
     } 

 }


?>