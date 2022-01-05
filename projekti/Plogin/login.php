<?php

//ini_set('error_reporting', E_ALL);
//ini_set( 'display_errors', 1 );


if(isset($_POST["username"]) && isset($_POST["password"])){
    if(!$empty($_POST["username"]) && !$empty($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        
    }

}else{
    echo "ERROR, Unijeli ste pogresan username ili password!";
}




?>