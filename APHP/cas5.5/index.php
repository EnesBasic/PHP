<?php


ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);


/**
 * 
 * This class is responsible for handling all user functionalities.
 * 
 */

class User{
    public $username;
    public $password;

    /**
     * 
     * this is our constructor which will initialize this class.
     * We need to provide a username and password  for the user.
     * @param string $username the username to login
     * @param string $password the password to login
     * @return void
     * 
     */

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;   
    }


    /**
    * 
    *This is our method to write out the username and password for the user.
    *@return string
    *
    */

    private function write() {
        return
        "Username: " . $this->username . 
        " Password: " . $this->password;
    }
}

?>