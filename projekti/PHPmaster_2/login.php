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
    <form action="" method="POST">
        <label for="text">Unesite username: </label>
        <input type="text" name="username">
        <br><br>
        <label for="text" method="POST">Unesite password: </label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>
       
    <?php
        if(isset($_POST["username"]) && isset($_POST["password"])){
            if(!empty($_POST["username"]) && !empty($_POST["password"])){

            if(file_exists("users.json")){
                $users = file_get_contents("users.json");
                $users = json_decode($users, true);
            }

            $username = $_POST["username"];
            $password = $_POST["password"];

            $user_logged = 0;
            foreach($users as $user){
                if($user["username"] === $username && $user["password"] === $password){
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                $_SESSION["logged"] = date("d.m.Y H:i:s");
                header("Location: dashboard.php?message=Successfully login!");
                return;
            }
        }

        if($user_logged == 0 ){
            echo "<span style='color: red;'>ERROR wrong username or password!!!!</span>";
        }

    }else{
            echo "<span style='color: red;'>You entered empty fields!</span>";
        }
    }


    ?>
</body>
</html>