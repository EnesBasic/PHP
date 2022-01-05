<?php
 ini_set('error_reporting', E_ALL);//prikazivanje gresaka xampa na linuxu
 ini_set( 'display_errors', 1 );//prikazivanje gresaka xampa na linuxu
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
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Loguj se">
        <br>
    </form>
  </body>
</html>
