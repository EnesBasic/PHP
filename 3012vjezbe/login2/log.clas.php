<?php

session_start();

$host="localhost";
$korisnik="root";
$password="";
$db="registar";


$data=mysqli_connect($host,$korisnik,$password,$db);

if(isset($_POST["login"]))
{
    $username=$_POST["uname"];
    $email=$_POST["email"];
    $pass=$_POST["password"];

    $sql="SELECT * FROM korisnik WHERE email='".$email."' AND password='".$pass."'";

    $result=mysqli_query($data, $sql);

    $row=mysqli_fetch_array($result);

    if($row)
    {
        $_SESSION["uname"]=$username;
        $_SESSION["email"]=$email;
        header("Location:home.php");
    }
    else
    {
        echo "email or password do not match!!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="logout.php">Logout</a>
</body>
</html>
