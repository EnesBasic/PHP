<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>HOME page</title>
</head>
<body>

    <?php

    include "includes/person.inc.php";

    //$pet01 = new Pet();
    //echo $pet01->owner();
    
    $pet01 = new Person();
    echo $pet01->first();

    ?>

</body>
</html>