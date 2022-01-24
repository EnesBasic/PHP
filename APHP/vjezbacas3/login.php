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
        <form class="forma_deg" action="index.php" method="POST">
            <div>
                <label class="label">Username</label>
                <input class="input" type="text" name="username" required maxlength="100">
            </div>

            <div>
                <label class="label">Password</label>
                <input class="input" type="password" name="password" required maxlength="256">
            </div>      
            <div>
                <label class="label">E-mail</label>
                <input class="input" type="email" name="email" required maxlength="50">
            </div>
            <br>
            <div>
                <button type="submit" name="login" class="btn">Login</button>
            </div>
        </form>
    </div>
    <?php
    
    ini_set('error_reporting', E_ALL);
    ini_set( 'display_errors', 1 );
    
    if(isset($_GET["message"]) && !empty($_GET["message"])){
        echo "<h2>" .$_GET["message"]. "</h2>";
    }
    
    ?>
    
</body>
</html>