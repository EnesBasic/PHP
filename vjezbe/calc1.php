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
    <form action="index.php" method="get">
        <label>Unesite broj: </label>    
        <input type="number" name="broj1">
        <label>Unesite broj: </label>    
        <input type="number" name="broj2">  
       <button type="submit" name="izvrsi">Izvrsi</button>
    </form>
    <br>
    Answer: <?php echo $_GET["broj1"] + $_GET["broj2"]; ?>
    <br>
    
</body>
</html>
