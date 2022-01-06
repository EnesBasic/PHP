<?php
 ini_set('error_reporting', E_ALL);
 ini_set( 'display_errors', 1 );

 if(isset($_POST["r"]) && isset($_POST["t"])){
     if(!empty($_POST["r"]) && !empty($_POST["t"])){



         $unam = $_POST["r"];
         $pass = $_POST["t"];
     }

     if(file_exists("bazna.json")){
         $kori = file_get_contents("bazna.json");
         $kori = json_decode($kori, true);
     }else{
         $kori = array();
     }

     $kori = array("r" => $unam, "t" => $pass);
     file_put_contents("bazna.json", json_encode("bazna.json"));
     header("Location: ../log.php");

 }
?>
