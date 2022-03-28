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

    protected function get_default(){
        return "We Don't have User Data !!! <br>";
    }

    public function __get($method){
        $method = "get_" . $method;
        if (method_exists($this, $method)){
            return $this->{$method}();
        }else{
            return $this->get_default();
        }
    }

}

$user = new User();
echo $user->username;
echo $user->age;
echo $user->fullname;

echo $user->ne_postoji_nikako;

?>