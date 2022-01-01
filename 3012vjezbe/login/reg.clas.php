<?php

$host="localhost";
$korisnik="root";
$password="";
$db="registar";


$data=mysqli_connect($host,$korisnik,$password,$db);

if(isset($_POST['register']))
{
    $username=$_POST['register'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="INSERT INTO korisnik(name, email, password) VALUES
    ('$username', '$email', '$pass')";

    $result=mysqli_query($data, $sql);

    if($result)
    {
        echo "register success";
    }
}


?>