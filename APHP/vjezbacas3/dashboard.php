<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

session_start();

if(isset($_SESSION["user_id"])){
    echo "ID: " .$_SESSION["user_id"];
    echo "Logged in: " .$_SESSION["logged"];
}

?>