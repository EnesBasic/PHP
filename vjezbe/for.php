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
    <title>for</title>
</head>
<body>
     <?php

        $index = 1;

        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

echo "<br>";

        for($i = 1; $i <= 5; $i++){
            echo "$i <br>";            
        }

echo "<br>";

        $luckyNumbers = array(4,8,14,16,23,42);
        echo "$luckyNumbers[2] <br>";
        
echo "<br>";

        for($i = 0; $i <= count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }

    ?>
</body>
</html>
