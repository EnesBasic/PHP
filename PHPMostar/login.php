<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <?php
        if(isset($_GET["message"])){
            echo "<p>". $_GET["message"] . "</p>";
        }
    ?>
    <form action="" method="POST">
        <label for="username">Input your username</label>
        <input type="text" name="username" placeholder="...username..." required>
        <br><br>
        <label for="password">Input your password</label>
        <input type="password" name="password" placeholder="...password..." required>
        <br><br>
        <input type="submit" value="LogIN">
    </form>
    <?php
 
    ?>

</body>
</html>