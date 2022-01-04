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
    <title>while_do while</title>
</head>
<body>
     <?php
     
// WHILE
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

echo "<br><br>";
// DO WHILE

        $index = 6;
        do{
            echo "$index <br>";
            $index++;
        }while($index <= 5);

    ?>
</body>
</html>
