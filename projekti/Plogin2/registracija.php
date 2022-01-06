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
    <title>Registracija</title>
</head>
<body>
    <form action="reg.inc.php" method="POST">
            <label for="username">username :</label>
            <input type="text" name="uname">
            <br>
            <label for="password">password :</label>
            <input type="password" name="pass">
            <br>
            <input type="submit" name="submit" value="registruj se">
    </form>
  </body>
</html>

<!--

 ini_set('error_reporting', E_ALL);
 ini_set( 'display_errors', 1 );