<?php

class Calc{

    public $number1;
    public $number2;

    public function __construct($number1, $number2){
    $this->number1 = $number1;
    $this->number2 = $number2;
    }

    public function add(){
        echo $this->number1 + $this->number2;
    }

}

$calc = new Calc(24,2);
$calc -> add();

?>