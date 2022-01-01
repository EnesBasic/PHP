<?php

class Session{
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        return false;
    }

    





}



?>