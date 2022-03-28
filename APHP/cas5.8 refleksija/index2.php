<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

class User{
    protected function get_fullname(){
        return "This is my fullname <br>";
    }

    protected function get_age(){
        return "This is my age <br>";
    }

    protected function get_username(){
        return "This is my username <br>";
    }

    public function __get($method){
        $method = "get_" . $method;
        if (method_exists($this, $method)){
            return $this->{$method}();
        }else{
            return "It doesn't exist !";
        }
    }

}

$user = new User();
echo $user->username;
echo $user->age;
echo $user->fullname;


?>