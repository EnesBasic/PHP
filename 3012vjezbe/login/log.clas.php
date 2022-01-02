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
