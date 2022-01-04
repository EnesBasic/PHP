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
    <title>Calculator2</title>
</head>
<body>
    <form action="" method="post">
       operand 1: <input type="number" step="0.01" name="broj1"><br>
       operator: <input type="text" name="op"><br>
       operand 2:<input type="number" name="broj2"><br>

       <button type="submit" name="izvrsi">Izvrsi</button>
    </form>
    <br>
    <?php 
    $num1=$_POST["broj1"];
    $num2=$_POST["broj2"];
    $operator=$_POST["op"];
    
    if($operator == "+"){
        echo $num1 + $num2;
    }elseif($operator == "-"){
        echo $num1 - $num2;

    }elseif($operator == "*"){
        echo $num1 * $num2;

    }elseif($operator == "/"){
        echo $num1 / $num2;

    }else{
        echo "ERROR!!!";
    }

    ?>
</body>
</html>
