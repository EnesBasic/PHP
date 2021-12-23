<?php

session_start();

function session_checker($kljuc){
    if(isset($_SESSION[$kljuc])){
        echo $_SESSION[$kljuc];
        echo "<br>";
    }
}
session_checker("username");
session_checker("logged");


?>

<a href="dashboard.php">dashboard</a>
<a href="dashboard2.php">dashboard2</a>
<a href="dashboard3.php">dashboard3</a>
<a href="logout.php">logout</a>
