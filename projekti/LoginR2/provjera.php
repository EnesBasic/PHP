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

    <form action="login.php" method="post"> 
        <label>Username :</label>
        <input type="text" name="uname">
        <br><br>
        <label>Password</label>
        <input type="text" name="pass">
        <br></br>
        <input type="submit" name="register" value="Register">
        <br>
    </form>
    <?php
    
    if($_GET['error']){
        echo "<div class='error'>" .$_GET['error']."</span>";
    }
    
    ?>
</body>
</html>