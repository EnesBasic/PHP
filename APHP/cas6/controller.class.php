<?php

class Conroller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function getData(){
        return $this->model->data;
    }
}

?>