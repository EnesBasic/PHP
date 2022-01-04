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
    <title>Checkbox</title>
</head>
<body>
    <form action="" method="post">
       Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
       Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
       Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
       <input type="submit" value="izvrsi">
    </form>
    <br>
    <?php

        $fruits=$_POST["fruits"];
        echo $fruits[0];

    ?>
    
</body>
</html>
