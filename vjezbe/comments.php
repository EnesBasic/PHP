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
    <title>Switch == if</title>
</head>
<body>
    <form action="" method="post">
       What was your grade ?
       <input type="text" name="grade"><br>
       <button type="submit" name="izvrsi">Izvrsi</button>
    </form>
    <br>

    <?php

        // Using it when you have 1 value and want to compare it to bunch of others
        $grade = $_POST["grade"];
        switch ($grade){
            case "A":
                echo "You did amazing";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad!";
                break;
            case "F":
                echo "You FAIL!";
                break;
            default:
                echo "Invalid grade";

        }

    ?>
</body>
</html>
