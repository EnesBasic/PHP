<?php

class TemplateUser{
    public $name;
    public $lastname;
    public $email;
    public $password;

    public function __construct($name, $lastname, $email, $password){
        $this -> name = $name;
        $this -> lastname = $lastname;
        $this -> email - $email;
        $this -> password = $password;
    }

    public function get_Info(){
        echo "My name is: " .$this->name." ".$this->lastname;
        echo "<br>";
        echo "My email is: " .$this->email; 
        } 
}


class User extends TemplateUser{
    public $status = "2";
}

class Admin extends TemplateUser{
    public $status = "3";
    public function __construct($name, $lastname, $email, $password){
        parent:: __construct($name, $lastname, $email, $password);
    }
}


$user = new User("Bruce", "Wayne", "bruce@wayne.com", "1234");
$user->get_Info();
echo "<br><br>";



?>