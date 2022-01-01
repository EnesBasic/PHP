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
<body style="background:#CCC;">
<div class="header">
        <h2>Login</h2>

    </div>
    <form method="POST" action="process.php">
        <div class="input-group">
            <label>username</label>
            <input type="text" name="username" placeholder="Input here your username...">
        </div>
        <div class="input-group">
            <label>password</label>
            <input type="password" name="password" placeholder="Input here your password...">
        </div>
        <br>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member ?   <a href="register.php">Sign up</a>
        </p>       

</body>
</html>