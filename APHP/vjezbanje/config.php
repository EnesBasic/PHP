<?php

//ini_set('error_reporting', E_ALL);
//ini_set( 'display_errors', 1 );

class config {

    public static function connect()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login_project1";
    

    try{

        $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    }catch(PDOException $e)
    {
        echo "Connection Failed" .$e->getMessage();
    }

    return $con;
    }
}

?>