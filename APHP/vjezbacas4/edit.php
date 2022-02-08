<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

require "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit</title>
</head>
<body>
    <?php
    
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = $connection -> prepare("SELECT * FROM user WHERE id=$id LIMIT 1");
            $sql->execute();
            $result = $sql -> setFetchMode(PDO::FETCH_ASSOC);
            echo($results = $sql-> fetchAll());


        }else{
            //header('Location: index.php');
            echo " greska";
            //Mozete vratiti kroz get nazad gresku u index.php
        }
    
    ?>
</body>
</html>