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
}

$a = Connection::getInstance();
$b = Connection::getInstance();

var_dump($a === $b);

?>