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

class RectangleDecorator{
    protected $rectangle;
    protected $a;
    protected $b;

    public function __construct(Rectangle $rectangle){
        $this->rectangle = $rectangle;
        $this->a = $this->rectangle->a;
        $this->b = $this->rectangle->b;
    }

    public function circumReference(){
        return 2 * ($this->a + $this->b);
    }
}

$p = new Rectangle(2,10);
echo $p->surface();

echo "<br>";

$pd = new RectangleDecorator($p);
echo $pd->circumReference();
