<?php

class Rectangle{
    public $a;
    public $b;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function surface(){
        return $this->a * $this->b;
    }
}

$p = new Rectangle(2,10);
echo $p->surface();
