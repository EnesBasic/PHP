<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:<?php
            if(isset($_SESSION["boja"])){
                echo $_SESSION["boja"];}?>
           }
    </style>
</head>
<body>
    <form action="color.php" method="GET">
    <label for="boja">Odaberi svoju boju</label>
    <input type="color" name="boja">
    <br>
    <input type="submit" value="posalji boju">
    </form>
</body>