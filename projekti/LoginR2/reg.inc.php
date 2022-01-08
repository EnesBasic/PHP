<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

if(isset($_POST["uname"]) && isset($_POST["pass"])){
    if(!empty($_POST["uname"]) && !empty($_POST["pass"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

    if(file_exists("baza.json")){
        $newuser = file_put_contents("baza.json");
        $newuser = json_encode($newuser, true);
    }else{
        $newuser = array();}

        $newuser[]=array("uname" => $uname, "pass" => $pass);
        $newuser = file_get_contents("baza.json", json_encode($newuser));
        header("Location: provjera.php");

    }else{
        echo "<span> Nije poslano! </span>";
    }

}else{
    echo "<span> Prazno! </span>";
}

?>