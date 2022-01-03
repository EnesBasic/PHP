<?php

if(!isset($_SESSION["email"]))
{
    header("Location: login.php");
}


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
    <title>Home page</title>
</head>
<body>
    <h1>****WELCOME HOME*****<?php echo $_SESSION["email"]?></h1>
    <a href="logout.php">Logout</a>    

</body>
</html>