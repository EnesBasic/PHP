<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWeb</title>
</head>
<body>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
               <h4>SIGNUP</h4>
               <p>Don't have an account yet? sign up here</p>
                    <form action="includes/register.inc.php" method="post">
                        <input type="text" name="uid" placeholder="username...">
                        <br>
                        <input type="password" name="pwd" placeholder="password...">
                        <br>
                        <input type="password" name="rpwd" placeholder="repeat password...">
                        <br>
                        <input type="text" name="email" placeholder="email...">
                        <br><br>
                        <button type="submit" name="submit">Register</button>
                    </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>You have an account, Login in here</p>
                <form action="includes/login.inc.php">
                    <input type="text" name="uid" placeholder="username...">
                    <br>
                    <input type="password" name="pwd" placeholder="password...">
                    <br><br>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>