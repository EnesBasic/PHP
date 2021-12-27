<?php

session_start();

if(isset($_SESSION[""])){
    header("Location: demo1.php");
    echo $_SESSION;
}

?>