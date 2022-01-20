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
    <title>Includes_PHP</title>
</head>
<body>

    <?php
        $title = "My first Post";
        $author = "Enes";
        $wordCount = 400;

        include "article-header.php";
        include "includes/home.php";
        include "useful-tools.php";


        echo $feetInMile;
echo "<br>";
        sayHi("Enes");

    ?>
    
</body>
</html>
