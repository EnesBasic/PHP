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
    <form action="includes/reg.inc.php" method="POST">
        <label>Username: </label>
        <input type="text" name="name">
        <br>
        <label>Password: </label>
        <input type="password" name="pas">
        <br>
        <input type="submit" name="submit" value="Registruj se">
    </form>
</body>
</html>