<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host, $user, $password, $db);
if($data===false)
{
    die("connection_error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="select * from login where username='".$username."'AND password='".$password."'";
    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);
    
    if($row["usertype"]=="user")
    {
       $_SESSION["username"]=$username;
       header("Location: userhome.php");
    }

    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("Location: adminhome.php");
    }

    else
    {
        echo "Username or Password incorrect";
    }

}



?>


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
        <h2>Login Form</h2>
    </div>
        <form action="#" method="POST">
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
        </form>
</body>
</html>