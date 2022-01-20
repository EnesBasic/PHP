<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="username">Unesi username: </label> 
        <input type="text" name="username" required>
        <br>
        <label for="password">Unesi password: </label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
    <?php
    if(isset($_GET["error"])){
        echo "<div class='error'>" . $_GET["error"]. "</div>";
    }
    
    ?>
    <a href="register.php">Registruj se!</a>

</body>
</html>