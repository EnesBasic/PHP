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
    <title>Calculator</title>
</head>
<body>
    <form action="site.php" method="GET">
        Name: <input type="text" name="username">
        <input type="submit" value="submit">
    </form>
    <br>

    <?php
    echo $_GET["username"];
    ?>

</body>
</html>
