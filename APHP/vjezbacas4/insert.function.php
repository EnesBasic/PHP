<?php

require "connection.php";

if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["status"])){
    if(!empty($_POST["name"]) && !empty($_POST["password"]) && !empty($_POST["status"])){
        $name = $_POST["name"];
        $password = $_POST["password"];
        $status = $_POST["status"];
        $datetime = date("H:i:s d.m.Y");
        if($status == "nula"){
            $status = 0;
        }

        $name = trim($name);
        $password = trim($password);
        $status = trim($status);
        $password = md5($password);

        $sql_insert = "INSERT INTO user
        (name, password, status, datetime)
        VALUES
        ('{$name}', '{$password}', '{$status}', '{$datetime}')";

        $connection->exec($sql_insert);
        //Uraditi provjeru da li je izvresen Unos
        if($connection->lastInsertId() > 0){
            header("Location: index.php");
            echo "Uspjesno ste unijeli novog korisnika";
            //Vratiti poruku o uspjesnosti
        }else{
            header("Location: index.php");
            echo "Greska pri unosu";
            //vratiti poruku o NEuspjesnosti
        }

    }else{
        //vratiti gresku
    }

}else{
    //vratiti gresku
}

?>