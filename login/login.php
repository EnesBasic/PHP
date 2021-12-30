<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
        <form action="proccess.php" method="POST">
            <p>
                <label>Username:</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label>Password:</label>
                <input type="password" name="password" id="password">
            </p>
            <p>
                <input type="submit" id="btn" value="Login">
            </p>
        </form>
    </div>
</body>
</html>