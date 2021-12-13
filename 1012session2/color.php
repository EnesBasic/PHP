<?php

if (isset($_GET["boja"])){
    $boja = $_GET["boja"];
    session_start();

    $_SESSION["boja"] = $boja;
    header("Location: index.php");
}

?>