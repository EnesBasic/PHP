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
    <title>Funkcije</title>
</head>
<body>
<form action="" method="post">
   
        <input type="text" name="student">  
       <button type="submit" name="izvrsi">Izvrsi</button>
    </form>
    <br>
    <?php

       $ocjene=array("Enes" => "B+", "Doli" => "A+", "Ammar" => 10);
       echo $ocjene[$_POST["student"]];
    
    ?>
    
</body>
</html>
