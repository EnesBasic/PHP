<?php

class SignupContr
{
    private $uid;
    private $pwd;
    private $rpwd;
    private $emailaddress;

    public function __construct($uid, $pwd, $rpwd, $email){
        $this-> $uid = $uid;
        $this-> $pwd = $pwd;
        $this-> $rpwd = $wpwd;
        $this-> $emailaddress = $email;
    }

    private function emptyInput(){
        $result;
        if(empty($this->$uid) || empty($this->$pwd) || empty($this->$rpwd)|| empty($this->$email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->$uid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->$emailaddress, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result;
        if($this->$pwd !== $this->$rpwd){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}
?>