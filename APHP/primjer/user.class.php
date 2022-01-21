<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

class User{
    public function login($username, $password){
        $validation = new Validation();
        if($validation -> isset($username) && $validation->isset($password)){
            $file = new File("korisnici.json");
            $users = $file->get();

            $user_logged = 0;
            foreach($users as $user){
                if($user["username"]=== $username && $user["password"]=== $password){
                    $session = new Session();
                    $session->set("username", $username);
                    $session->set("logged", date("d.m.Y H:i:s"));

                    $this->redirect("dashboard");

                }
            }
        }
    }

    public function register(){

    }

    public function redirect($page){
        if(file_exists($page. ".php")){
            header("Location: ".$page. ".php");
            return;
        }
        return false;
    }
}

?>