<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

class Validation{
    public function isset($value){
        if(isset($value) && !empty ($value)){
            return true;
        }
        return false;
    }
}

?>