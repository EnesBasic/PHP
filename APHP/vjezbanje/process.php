<?php

session_start();

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

include_once("config.php");

if(isset($_POST['register']))
{

    $con = config::connect();
    $username = sanitizeString($_POST['username']);
    $email = sanitizeString($_POST['email']);
    $password = sanitizePassword($_POST['password']);

    if ($username == "" || $email == "" || $password == "")
    {
        return;
    }

    if(insertDetails($con, $username, $email, $password));
    {
     //echo ("Details inserted successfully");
        $_SESSION['username']=$username;
        header("Location: profile.php");
    }
}

if($_POST['update'])
{
    $con = config::connect();
    $username = sanitizeString($_POST['username']);
    $email = sanitizeString($_POST['email']);
    $password = sanitizePassword($_POST['password']);

    if ($username == "" || $email == "" || $password == "")
    {
        return;
    }

    $currentUsername = $_SESSION['username'];
    $query = $con->prepare("SELECT * FROM users WHERE username=:username");

    $query->execute();

    $query->bindParam(":username", $currentUsername);

    $result = $query->fetch(PDO::FETCH_ASSOC);

    $id = $result['id'];

    if(updateDetails($con, $id, $username, $email, $password));
    {
     //echo ("Details inserted successfully");
        $_SESSION['username']=$username;
        header("Location: profile.php");
    }
}

function insertDetails($con, $username, $email, $password)
{
    $query =  $con->prepare("INSERT INTO users (username, email, password) VALUES(:username, :email, :password)");
    
    $query->bindParam(":username", $username);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);

    return $query->execute();
}



if(isset($_POST['login']))
{
    $con = config::connect();
    $username = sanitizeString($_POST['username']);
    $password = sanitizePassword($_POST['password']);

    if ($username=="" || $password=="")
    {
        return;
    }

    if(checkLogin($con, $username, $password))
    {
        $_SESSION['username']=$username;
        header("Location: profile.php");
    }else{
        echo "The username and password are incorrect!!!";
    }
}

function checkLogin($con, $username, $password)
{
    $query =  $con->prepare("SELECT * FROM users WHERE username=:username AND password=:password");

    $query->bindParam(":username", $username);
    $query->bindParam(":password", $password);
    $query->execute();

    if($query->rowCount() == 1)
    {
        return TRUE;
    }
    else 
    {
        return FALSE;
    }
}


function sanitizeString($string)
{
    $string=strip_tags($string);
    $string=str_replace(" ","",$string);
    return $string;
}

function sanitizePassword($string)
{
    $string = md5($string);
    return $string;
}

function updateDetails($con, $id, $username, $email, $password)
{
    $query = $con->prepare("UPDATE users SET username=:username, email=:email, password=:password WHERE id=:id");
    $query->bindParam(":username", $username);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);
    $query->bindParam(":id", $id);

    return $query->execute();
    
}

?>