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
        if(isset($_POST["username"])&& isset($_POST["password"])){
            if(!empty($_POST["username"])&& !empty ($_POST["password"])){
                if(file_exists("users.json")){
                    $users = file_get_contents("users.json");
                    $users = json_decode($users, true);
                }
                
                $username = $_POST["username"];
                $password = $_POST["password"];
                $user_logged = 0;

                foreach($users as $user){
                    if($user["username"] === $username && $user["password"]=== $password){
                        session_start();
                        $_SESSION["username"] = $user["username"];
                        $_SESSION["password"] = $user["password"];
                        $_SESSION["logged"] = date("d.m.Y H:i:s");
                        header("Location: dashboard.php");
                        return;
                    }
                }

                if($user_logged == 0){
                    echo "<span style = 'color:red;'>Username or password wrong, try again!</span>";
                }

            }else{
                echo "<span style='color:red;'>You sent empty fields!</span>";
            }
        }



        
    ?>

</body>
</html>