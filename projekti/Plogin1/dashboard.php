<?php
session_start();

function session_checker($kljuc){
    if(isset($_SESSION[$kljuc])){
        echo "vrijednost 1" .$_SESSION[$kljuc];
        echo "<br>";
    }
}
session_checker("username");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <h1>WELCOME</h1>  
    <a href="dashboard.php">Dashboard</a>
    <a href="logout.php">Logout</a>
</body>
</html>


