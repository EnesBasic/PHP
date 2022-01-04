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
    <title>Return</title>
</head>
<body>

    <?php
    // echo 2^3 -> 2*2*2;
    function cube($num){
        return $num * $num * $num;
    }

    $cubeResult = cube(3);
    echo $cubeResult;
    ?>
    
</body>
</html>
