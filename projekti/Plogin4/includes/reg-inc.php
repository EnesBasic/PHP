<?php

if(isset($_POST["uname"]) && isset($_POST["pass"])){
    if(!empty($_POST["uname"]) && !empty($_POST["pass"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
    }
    if(file_exists("novi.json")){
      $kori = file_get_contents("novi.json");
      $kori = json_decode($kori, true);
    }else{
    $kori = array();
    }

    $kori = array("uname" => $uname, "pass" => $pass);
    file_put_contents("novi.json",json_encode("novi.json"));
    header("location: ../nesto.php");
}

?>
