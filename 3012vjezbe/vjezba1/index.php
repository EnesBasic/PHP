<?php

class Calculator{

    public $number1;
    public $number2;

    public function __($number1,$number2){
    $this->number1 = $number1;
    $this->number2 = $number2;
    }

    public function add(){
        echo $this->number1 + $this->number2;
    }

    public function sub(){
        echo $this->number1 - $this->number2;
    }

    public function multiply(){
        echo $this->number1 * $this->number2;
    }

    public function div(){
        echo $this->number1 / $this->number2;
    }
}

$calc = new Calculator(24,2);
$calc -> multiply();
echo "<br>";

?>