<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

class Calculator{
    protected $number1;
    private $number2;

    public function __construct(int $number1, int $number2){

        if(is_integer($number1) && is_integer($number2)){
            $this->number1 = $number1;
            $this->number2 = $number2;
        }else{
            $this->number1 = 0;
            $this->number2 = 0;
        }
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

    public function div()
    {
        ?>
        <h1>Total div :</h1>
        <?php
        echo $this->number1 / $this->number2;
    }
}

$calc = new Calculator(4,5);

$calc->add();
echo "<br>";
$calc->sub();
echo "<br>";
$calc->multiply();
echo "<br>";
$calc->div();
echo "<br>";

echo "<hr>";

$calc2 = new Calculator(6,7);
$calc2->add();
echo "<br>";
$calc2->sub();
echo "<br>";
$calc2->multiply();
echo "<br>";
$calc2->div();
echo "<br>";

?>