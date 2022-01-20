<?php

session_start();

function session_checker($kljuc){
    if (isset($_SESSION[$kljuc])){
        echo "Vrijednost 3:" .$_SESSION[$kljuc];
        echo "<br>";
    }
}
session_checker("username");
session_checker("logged");

?>

<a href="dashboard.php">Dashboard</a>
<a href="dashboard1.php">Dashboard1</a>
<a href="dashboard2.php">Dashboard2</a>
<a href="logout.php">Logout</a>
