<p>Ovo je neki neivdeno dobar tekst...</p>

<?php
echo "<h1>Dobro dosli na moju web stranicu</h1>";
echo "Rezultat je: " ;# jednolinijski kometar echo 2+2;echo 2+2;

// jednolinijski komentar/*Ovo je viselinijski komemtar vidi sta sam napisao

/*
*
*
/** * * * * */

?>
<h2>Naslov broj 2</h2>
<?php

$ime = "John";
$prezime = "Wayne";
$broj_godina = 99;
$stanje_racuna = 285.89;

echo "pozdrav,  ".$ime." ".$prezime.". Tvoj broj godina je: " .$broj_godina;
echo ". stanje racuna: " .$stanje_racuna." KM. ";
echo $ime . $prezime;
$ime_korisnika="Donald";
$ime_korisnika="Haris";

//Definisanje konstante//define ("X", 10);//echo "<h3>" . X . "</h3>"

define("IME","Bruce");define("Godine",35);define("Stanje",245.46);
echo "<br>";
echo "<p>Ime: ".IME. "</p>";
echo "<p>Godine: ".Godine. "</p>";
echo "<p>Stanje: ".Stanje. "</p>";
$ime_firme="ITAcademy";
define("BROJ_ODSJEKA", 30);
echo "<p>".$ime_firme. "</p>";


echo "<br>" . "1-dio-kraj" . "<br>";
echo "<br>";


$a=10;
if($a==11)echo "a je 11";echo "a nije 11";


echo "<br>" . "2-dio-kraj" . "<br>";
echo "<br>";


/**U aplikaciju ulazi promjenljiva $userStatus. Ova promenljiva sadrži cjelobrojnu vrijednost
(konstantu) o tipu korisnika. Potrebno je, u odnosu na vrijednost promenljive, emitovati
određeni sadržaj.
Ako je promjenljiva jednaka 1 treba emitovati:
• Ako je promjenljiva jednaka 1 treba emitovati:
Welcome Adminstrator
• Ako je promenljiva jednaka 2 treba emitovati:
Welcome User
• Ako je promenljiva nije prepoznata treba emitovati:
Unknown User type
*/

$userStatus = "4";
switch($userStatus){
    case 1:
        echo "Welcome Admin";
        break;
    case 2:
        echo "Welcome User";
        break;
    default:
        echo "Unknown User type";
        break;
}

echo "<br>" . "3-dio-kraj" . "<br>";
echo "<br>";



?>
