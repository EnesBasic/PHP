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
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form_pos";>
    <h1 class="title">Login form</h1>
        <form class="forma_deg" action="log.clas.php" method="POST">
            <div>
                <label class="label">Username</label>
                <input class="input" type="text" name="username">
            </div>

            <div>
                <label class="label">Password</label>
                <input class="input" type="password" name="password">
            </div><br>

            <div>
                <button type="submit" name="login" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>