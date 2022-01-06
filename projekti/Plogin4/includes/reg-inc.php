<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

if(isset($_POST["name"]) && isset($_POST["pas"])){
    if(!empty($_POST["name"]) && !empty($_POST["pas"])){
        $uname = $_POST["name"];
        $pass = $_POST["pas"];
    }

    if(file_exists("novi.json")){
        $kori = file_get_contents("novi.json");
        $kori = json_decode($kori, true);
    }else{
        $kori = array();
    }

    $kori = array("name" => $uname, "pas" => $pass);
    file_put_contents("novi.json", json_encode("novi.json"));
    header("Location: ../log.php");
}
?>
