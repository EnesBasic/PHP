<?php

session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: login.php");
    
    echo "You are logged out, sorry";
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
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>This is USER HOME PAGE</h1><?php echo $_SESSION["username"]?>
    <a href="logout.php">Logout</a>
</body>
</html>
