<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

@$ime = $_GET["Enes"];
echo @$ime;
echo "Dali ovo dalje funkcionise <br>";


/**
 * 
 * 
 * This class user is responsible for handling all user functionalities
 * 
 * 
 */



class Test{
    public $username;
    public $password;

    /**
     * 
     * @description This is our conctuctor witch will initialize this class.
     * wee need to provide username and password for the user.
     * @param string $username the login
     * @param string $password the password login
     * @return void
     * @author Enes Basic
     * @copyright Enes Basic 2022
     * 
     * 
     */

    public function __construct($username, $password){
        $this->username=$username;
        $this->password=$password;

    }
    /**
     * 
     * This is pur method to write put username and password
     * @return string
     */

    # @method write...;
    public function write(){
        return
        "Username". $this->username;
        "Password". $this->password;
    }

}

?>