<?php

// STATICNO svojstvo

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
                return "Hello User from";// .$self::APP;
                break;
            case "de":
                return "Halo User von";// .$self::APP;
                break;
            case "bs":
                return "Pozdrav Korisniku iz";//.$self::APP;
                break;
            default:
                return "Hello user from";//.$self::APP;
                break;
        }
    }
}

User::setLanguage("bs");

$user1 = new User();
echo $user1->sayHello();

echo "<br>";

$user2 = new User();
echo $user2->sayHello();


?>