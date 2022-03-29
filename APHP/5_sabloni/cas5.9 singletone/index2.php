<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);




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
        $connection = self::getInstance();

        $hostname = "localhost";
        $user = "root";
        $password = "";
        $database = "user";

        $connection->connection = new mysqli($hostname, $user, $password, $database);
        //ili
        //$connection = new mysqli($hostname, $user, $password, $database);
        return $connection;

    }

    public function __clone(){
        throw new Exception("Can't clone a singleton databse connection class");
    }
}

$a = Connection::getInstance();
$b = Connection::getInstance();

$c = clone $b;

$connection = $a::connect();
var_dump($a === $b);
//var_dump($connection);
var_dump($connection->$connection);

?>