<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );


class Session{
    public function __(){
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public function get($key){
        if(isset($_SESSION[$key])){
            return true;
        }
        return false;
    }
}

?>