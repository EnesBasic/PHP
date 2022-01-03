<?php

session_start();

$host="localhost";
$user ="root";
$password="";
$db="registar";



$data=mysqli_connect($host, $user, $password, $db);
if(($data)==false)
{
    die("connection_error");
}

if(isset($_POST["login"]))
{
    $username=$_POST["uname"];
    $pass=$_POST["password"];

    $sql = "SELECT * FROM korisnik WHERE 
            name = '".$username."' AND password ='".$pass."'  ";

    $rezult = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($rezult);

    if($row)
    {
       $_SESSION['uname']=$username; 
       header("Location: home.php");
    }
    else
    {
        echo "Username or password do not match, try again!!";
    }
}

?>