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
    <title>Provjera</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Loguj se">
        <br>
    </form>
    <?php
    
    if(isset($_GET["error"])){
        echo "<div class='error'>" .$_GET["error"]. "</span>";
    }
?>
    <a href="registracija.php">Registruj se!</a>
    

  </body>
</html>