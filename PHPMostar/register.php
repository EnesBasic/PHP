<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Registering</h1>
        <form action="" method="POST">
            <label for="username">Input your username</label>
            <input type="text" name="username" required>
            <br>
            <br>
            <label for="password">inpout your password</label>
            <input type="password" name="password" required>
            <br>
            <br>
            <input type="submit" value="Register">
        </form>
    <?php
    if(isset($_POST["username"]) && isset ($_POST["password"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            if(file_exists("users.json")){
                $users = file_get_contents("users.json");
                $users = json_decode($users, true);
            }else{
                $users = array();   
            }
            $username = $_POST["username"];
            $password = $_POST["password"];

            $users[]=array("username" => $username, "password" => $password);
            if(file_put_contents("users.json", json_encode($users))){
                header("Location: login.php?message=Successfully registered, please log in!");
            }else{
                echo "<span style='color:red;'>Error: File not saved!</span>";
            }
        }else{
            echo "<span style='color:red;'>You sent empty field!!!</span>";
    }
}
    ?>
    </body>
</html>