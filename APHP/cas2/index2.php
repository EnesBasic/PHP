<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

class User{
    public static $language;

    public static function setLanguage($lang){
        self::$language = $lang;
    }

    public function sayHello(){
        switch(self::$language){
            case "en":
                return "Hello User";
                break;
            case "de":
                return "Halo User";
                break;
            case "bs":
                return "Pozdrav Korisnik";
                break;
            default:
                return "Helloooooo";
                break;
        }
    }
}

$user1 = new User();
echo $user1->sayHello();

$user2 = new User();


?>