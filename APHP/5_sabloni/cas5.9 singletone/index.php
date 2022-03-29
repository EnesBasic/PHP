<?php

class MyClass{

    private static $instance;

    private  function __construct(){}

    public static function instance(){
        if(!isset(self::$instance)){
            self::$instance = new MyClass();
        }
        return self::$instance;
    }
}

$a = MyClass::instance();
$b = MyClass::instance();

var_dump(($a === $b)&&($b===$c));
echo "<br>";
var_dump(get_class($a));
echo "<br>";
var_dump(get_class($b));




// Necemo dozvoliti instanciranje klase kao inace
//$a = new MyClass();
//$b = new MyClass();
