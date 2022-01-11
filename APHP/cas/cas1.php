<?php

class Automobil{

   public function start(){
        echo "automobil je krenuo";}

    public function stop(){
        echo "automobil se zaustavio";}

    public function right(){
        echo "automobil je skrenuo desno";}

    public function left(){
        echo "automobil je skrenuo left";}
    }

class Audi extends Automobil{

    echo "Audi";
        parent::start(){};

    echo "Audi";
        parent::stop(){};

    echo "Audi";
        parent::right(){};

    echo "Audi";
    parent::left(){};
}

class Ferrari extends Automobil(){

    echo "Ferrari";
        parent::start(){};

    echo "Ferrari";
        parent::stop(){};

    echo "Ferrari";
        parent::right(){};

    echo "Ferrari";
        parent::left(){};
}


?>


