<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );


if(isset($_POST["username"]) && isset($_POST["password"])&& isset($_POST["email"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"]) && !empty($_POST["email"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(strlen($email)>50 || strlen($password)>256){
            header("Location: login.php?message=Jedno polje je predugacko!");

        }


        $email = trim($email);
        $password = trim($password);

        $connection = new mysqli("localhost", "root", "", "user");
        if($connection->$connect_error){
            header("Location: login.php?message=Nije moguce napraviti konekciju na bazu!");
        }

        $sql = "SELECT * FROM user WHERE email='{$email}'";
        $result = $connection->query($sql);

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                if($row["email"] === $email && $row["password"] === $password){
                    session_start();
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["logged"] = date("d-m-Y H:i:s");
                    header("Location: dashboard.php");
                }
            }
        }else{
            header("Location: login.php?message=Ne postoji korisnik sa tim emailom!");
        }



    }
}

?>