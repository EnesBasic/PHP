<?php

class View{
    public $controller;

    public function __construct(Controller $controller){
        $this->controller = $controller;
    }

    public function output(){
        // Ovo je Pogled
        return "<h1> . $this->controller->getData().</h1>";
    }
}

?>