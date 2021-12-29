<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTER</h1>
    <form action="" method="post">
        <label for="text">Username</label>
        <input type="text" name="username..." placeholder="username..." required>
        <br><br>
        <label for="text">Password</label>
        <input type="password" name="password..." placeholder="password..." required>
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!empty($_POST["username"])&& !empty($_POST["password"])){
        
        if(file_exists("users.json")){
          file_get_contents("users.json");
          $users = json_decode($users, true);
        }else{
            $users = array();
        }

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $users[] = array("username" => $username, "password" => $password);

        if(file_put_contents("users.json",json_encode($users))){
            header("Location: login.php?message=Successfully registered!");
        }else{
            echo "<span style='color: red'>ERROR, wrong username or password</span>";
        }
}

}

?>