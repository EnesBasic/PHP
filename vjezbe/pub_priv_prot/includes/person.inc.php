<?php

class Person {

    protected $first = "Enes";
    private $last = "Basic";
    private $age = "42";

    public function owner(){
        $a = $this->first;
        return $a;
    }

}

class Pet extends Person{

    public function owner(){
        $a = $this->first;
        return $a;
    }
}

?>