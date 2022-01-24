<?php


ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );


// Pravljenje konekcije na bazu podataka
$connection = new mysqli("localhost", "root", "");
if($connection->connect_error){
    die("Connection failed :" .$connection->connect_error);
}

?>