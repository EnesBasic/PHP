<?php

class Connection{
    private static $instance;

    private function __construct(){}

    public static function getInstance(){
    if(self::$instance == null){
        self::$instance = new Connection();
        }

        return self::$instance;
    }

    public static function connect(){

        $hostname = "localhost";
        $user = "root";
        $password = "";
        $database = "user";

        $connection = new mysqli($hostname, $user, $password, $database);
        return $connection;
        
    }
}

$a = Connection::getInstance();
$b = Connection::getInstance();

var_dump($a === $b);

?>