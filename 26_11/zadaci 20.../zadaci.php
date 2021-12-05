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


echo "1-dio-kraj" . "<br>";
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


# ZADATAK 21 Korisničko ime i lozinka
/**
Problem:
Potrebno je izvršiti provjeru korisnika.
Korisnički podaci dolaze u promjenljivima $user i $pass, i potrebno je
da se poklapaju sa korisničkim imenom iz promjenljive $validUser i
šifrom iz promjenljive $validPass
*/

$user = "admin";
$pass = "12345";

$validUser = "Enes";
$validPass = "0123";

if($user===$validUser && $pass===$validPass){
    echo "Autentifikacija potvrdjena";
}else{
    echo "Access Denied";
}


echo "<br>" . "4-dio-kraj" . "<br>";
echo "<br>";


# ZADATAK 22 Pređeni put
/**Date su tri promjenljive
$startValue = 10; //početak puta
$endValue = 120; //kraj puta
$trip = 150; //dužina pređenog puta
• Potrebno je izračunati kompletnu dužinu puta ($endValue - $startValue).
• Ukoliko je pređeni put ($trip) veći od kompletne dužine puta,treba ispisati poruku: 
  You passed PREKORAČENA DUŽINA more than needed
• Ukoliko je pređeni put kraći od kompletne dužine puta, treba ispisati poruku:
  You need KOLIKO NEDOSTAJE to go
• Ukoliko je pređeni put isti kao i kompletna dužina puta, ispisuje se poruka:
  You passed EXACT DISTANCE
 */

$startValue = 10; //početak puta
$endValue = 120; //kraj puta
$trip = 110; //dužina pređenog puta

$komplet_put = $endValue - $startValue;
$predeni_put = $trip - $komplet_put;

echo "Kompletan put iznosi ".$komplet_put." kilometara <br>";

//$komplet_put = 110;
//$predeni_put = 110

if($trip > $komplet_put){
    echo "You passed ".$predeni_put. " kilometers more than needed";
    }elseif($predeni_put < $komplet_put){
    echo "<br>";
    echo "You passed  EXACT DISTANCE";
    }else{
    echo "You need " .$predeni_put. " kilometers to go";
}

    
?>
