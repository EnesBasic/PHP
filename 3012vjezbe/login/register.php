<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PHP, HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    
    <form action="" method="POST">
        <div class=input-group>
            <label for="text">Username:</label>
            <input type="text" name="user">
        </div>
        <div class=input-group>
            <label for="text">Password:</label>
            <input type="password" name="pass">
        </div>
        <div class=input-group>
            <label for="text">e-mail:</label>
            <input type="text" name="email">
        </div>
        <div class=input>
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
        Already a member! <a href="login.php">Sign in</a>
        </p>
    </form>
</body>
</html>