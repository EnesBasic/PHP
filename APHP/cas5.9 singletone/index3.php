<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);


class User{
    public function __construct(){
        echo "Hello User! <br>";
    }
}

class Admin{
    public function __construct(){
        echo "Hello Admin! <br>";
    }
}

class SuperAdmin{
    public function __construct(){
        echo "Hello Super Admin! <br>";
    }
}

class Factory{
    public static function createUser($type="user"){
        switch($type){
            default:
            case "user":
                return new User();
            break;
            case "admin":
                return new Admin();
            break;
            case "superadmin":
                return new SuperAdmin();
            break;
        }
    }
}

/**
 * Umjesto ovoga
 * if(nesto)
 * new user
 * else if(nesto drugo)
 * new admin
 * else if(nesto trece)
 * new SuperAdmin
 * else
 * new user
 * 
 * PIsem ovo:
 */

echo $user = Factory::createUser();
echo $admin = Factory::createAdmin();
echo $superadmin = Factory::createSuperAdmin();


