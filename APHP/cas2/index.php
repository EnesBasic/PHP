<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

class Calculator{
    public static $result;
    public static function add($number1, $number2){
        self::$result = $number1 + $number2;
        return self::$result;
        //$this->result
        //self::$result
    }

    public function result(){
        return self::$result;
    }
}

// Ovo je instancna metoda
//$calc  = new Calculator();
echo $calc->add(2,3);

echo "<hr>";

//Posto je staticna
echo Calculator::add(2,3);

echo "<hr>";

echo Calculator::add(3,4);

echo "<hr>";

$calc1 = new Calculator(4,5);
echo $calc1->result();
echo "<br>";

Calculator::add(5,5);
$calc2 = new Calculator(9,4);
echo $calc2->result();
echo "<br>";

echo $calc1->result();
echo "<br>";



?>