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