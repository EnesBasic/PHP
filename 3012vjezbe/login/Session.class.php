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

    public function set($key, $value){
        if($_SESSION[$key] = $value){
            return true;
        }
        return false;
    }

    public function edit($key, $value){
        return $this->set($key, $value);
    }

    public function delete($key){
        unset($_SESSION[$key]);
        if(!isset($_SESSION[$key])){
           return true;
        }
        return false;
    }

    public function destroy(){
        session_destroy();
    }

}


?>