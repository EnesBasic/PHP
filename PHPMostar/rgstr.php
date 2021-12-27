<?php

if (isset($_POST["submit"])){
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if($user == "admin" && $pass == "1234");
    echo "welcome" ."" . $user;
    "<br>";
    echo "password and username matched!";
}else{
    echo "error! please enter correct username and password!";
    //header("index.php?error=greska");
}



?>