<?php

session_start();

if (isset($_SESSION["ime_korisnika"])){
    echo "Ime :" .$_SESSION["ime_korisnika"];
}

if (isset($_SESSION["prezime_korisnika"])){
    echo "Prezime :" .$_SESSION["prezime_korisnika"];
}

if (isset($_SESSION["status_korisnika"])){
    echo "Status :" .$_SESSION["status_korisnika"];
}


?>
