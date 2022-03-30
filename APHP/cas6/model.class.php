<?php

class Model{
    public $data;
    public function __construct($page){
        
        require $page. ".model.php";
        $this->data = $poruka;

        //Zamislimo da smo otisli u bazu, dobavili podatak i sacuvali ga u data
        //$this->data ="Hello from " .$page. " stranice!";
    }
}
