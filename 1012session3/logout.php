<?php

function session_destroyer($kljuc){
    if(isset($_SESSION[$kljuc])){
        unset($_SESSION[$kljuc]);
    }
}

session_destroyer("username");
session_destroyer("logged");
session_destroy();

header("Location: index.php");

?>