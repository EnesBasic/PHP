<?php

$host="localhost";
$user ="root";
$password="";
$db="registar";

$data=mysqli_connect($host, $user, $password, $db);

if(isset($_POST["register"]))
{
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO korisnik (name, email, password) VALUES('$username','$email','$password')";

    $rezult=mysqli_query($data, $sql);

    if($rezult)
    {
        header("Location: login.php");
    }
}

?>