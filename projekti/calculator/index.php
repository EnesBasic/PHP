<?php

ini_set('error_reporting', E_ALL);//prikazivanje gresaka xampa na linuxu
ini_set( 'display_errors', 1 );//prikazivanje gresaka xampa na linuxu

class Calculator{

    public $broj1;
    public $broj2;
    
    function __construct($broj1, $broj2){
        $this->broj1 = $broj1;
        $this->broj2 = $broj2;
    }

    function add(){
        $rezult = $this->broj1 + $this->broj2;
            if(($rezult) == true){
                return $rezult;
            }else{
                echo "Error!";
                }
            }

} 

$calc = new Calculator(5,7);
$calc->add();


?>