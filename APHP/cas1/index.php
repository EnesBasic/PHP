<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

function add($num1, $num2){
    return $num1 + $num2;
}

class Claculator{
    public function add($num1,$num2){
        return $num1 + $num2;
    }
}

//echo add(1,2);
//echo add(2,3);

echo "<br>";

$calc = new Calculator();
echo $calc->add(1,2);

echo "<br>";

$calc1 = new Calculator();
echo $calc1->add(2,3);


?>

