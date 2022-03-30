<?php

class View{

    public $controller;
    public function __construct(Controller $controller){
        $this->controller = $controller;
    }

    public function output(){
        
        require $this->controller->model->page . ".view.php";

        // Ovo je Pogled
        //return "<h1>" . $this->controller->getData(). "</h1>";
    }
}
