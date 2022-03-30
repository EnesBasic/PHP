<?php

class Model{
    public $data;
    public $page;
    public function __construct($page){
        
        require $page. ".model.php";
        $this->data = $poruka;
        $this->page = $page;


        //Zamislimo da smo otisli u bazu, dobavili podatak i sacuvali ga u data
        //$this->data ="Hello from " .$page. " stranice!";
    }
}
