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
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="firstname" required placeholder="insert firstname...">
        <br>
        <input type="text" name="lastname" required placeholder="insert lastname...">
        <br>
        <input type="text" name="category1" required placeholder="insert first...">
        <br>
        <input type="text" name="category2" required placeholder="insert second...">
        <br>
        <input type="text" name="category3" required placeholder="insert third...">
        <br>
        <input type="text" name="twitter" required placeholder="insert twitter link...">
        <br>
        <input type="text" name="facebook" required placeholder="insert facebook link...">
        <br>
        <input type="text" name="dribbble" required placeholder="insert dribbble link...">
        <br>
        <input type="text" name="github" required placeholder="insert github link...">
        <br>
        <input type="text" name="email" required placeholder="insert your email...">
        <br>
        <input type="text" name="text1" required placeholder="insert footer link text...">
        <br>
        <input type="text" name="text2" required placeholder="insert footer link...">
        <br><br>
        <input type="submit" value="Insert data">
        <br>
    </form>
</body>
</html>