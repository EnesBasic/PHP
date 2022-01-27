<?php

session_start();

$username = $_SESSION['username'];
include_once("config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update details for <?php echo $username;?></title>
</head>
<body>
<form action="process.php" method="POST">
        <input type="text" name="username" placeholder="username" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="UPDATE" name="update">
        <br><br>
    </form>
</body>
</html>