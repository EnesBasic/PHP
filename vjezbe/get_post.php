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
    <title>Get_Post</title>
</head>
<body>
    <form action="" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="izvrsi">
    </form>
    <br>
    <?php

         echo $_POST["password"];
    
    ?>
    <br>
    
</body>
</html>
