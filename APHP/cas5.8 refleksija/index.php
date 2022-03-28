<?php


class User{
    public function login(){
        echo "user is logged in";
    }

    public function register(){
        echo "user is registered";
    }

    public function change_password(){
        echo "user has changed password";
    }
}

$user  = new User();
$user->login();
echo "<br>";
$user->register();
echo "<hr>";
$user->change_password();
echo "<hr>";

var_dump(get_class($user));
echo "<br>";
var_dump(get_class_methods($user));
echo "<hr>";
var_dump(get_class_vars($user));
echo "<hr>";



?>