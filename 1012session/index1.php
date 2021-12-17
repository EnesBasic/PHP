<?php

session_start();

function session_check($ispis, $kljuc){
    if(isset($_SESSION[$kljuc])){
       echo $ispis .": " . $_SESSION[$kljuc];
       echo "<br>";
    }
}

session_check("ime", "ime_korisnika");
session_check("prezime", "prezime_korisnika");
session_check("status", "status_korisnika");



/**
 * 
Tada ovo vise ne treba:

if (isset($_SESSION["ime_korisnika"])){
    echo "Ime: " .$_SESSION["ime_korisnika"];
}

echo "<br>";

if (isset($_SESSION["prezime_korisnika"])){
    echo "Prezime: " .$_SESSION["prezime_korisnika"];
}

echo "<br>";

if (isset($_SESSION["status_korisnika"])){
    echo "Status: " .$_SESSION["status_korisnika"];
}
}
 */

?>