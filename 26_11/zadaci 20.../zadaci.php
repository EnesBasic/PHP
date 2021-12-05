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
$trip = 170; //dužina pređenog puta

$komplet_put = $endValue - $startValue;
$predeni_put = $trip - $komplet_put;

echo "Kompletan put iznosi ".$komplet_put." kilometara <br>";

//$komplet_put = 110;
//$predeni_put = 110

if($trip > $komplet_put){
    echo "You passed $predeni_put kilometers more than needed";
    }elseif($trip < $komplet_put){
    echo "You need $predeni_put kilometers to go <br>";
    }elseif($predeni_put < $komplet_put){
    echo "You passed  EXACT DISTANCE <br>";
    }


    echo "<br>" . "5-dio-kraj" . "<br>";
    echo "<br>";


#ZADATAK 23 Cijena proizvoda
/**
Napraviti program koji na osnovu cijene proizvoda (promjenljiva
$productPrice) ispisuje da li je cijena niska, srednja ili visoka:
Mala pomoć:
Kreirati tri proizvoda
Kreirati tri cijene
Ispitati proizvod i cijenu
Ispisati korisniku proizvod, cijenu i da li je niska, srednja ili visoka
 */


$ulje = 4;
$mlijeko = 2.3;
$secer = 1.5;
$productPrice = 1.5;



if($ulje < $productPrice){
    echo "ulje = $ulje <br> productPrice = $productPrice <br>";
    echo "cijena ulja je mala &#128521<br>";

    }elseif($ulje == $productPrice){
        echo "ulje = $ulje <br> productPrice = $productPrice <br>";
        echo "cijena ulja je srednja &#128578<br>";
    }else{
        echo "ulje = $ulje <br> productPrice = $productPrice <br>";
        echo "cijena ulja je velika &#128545<br>";
    }

echo "<br>";
    
if($mlijeko < $productPrice){
    echo "mlijeko = $mlijeko <br> productPrice = $productPrice <br>";
    echo "cijena mlijeka je mala &#128521<br>";
    }elseif($mlijeko == $productPrice){
        echo "mlijeko = $mlijeko <br> productPrice = $productPrice <br>";
        echo "cijena mlijeka je srednja &#128578<br>";
    }else{
        echo "mlijeko = $mlijeko <br> productPrice = $productPrice <br>";
        echo "cijena mlijeka je velika &#128545<br>";
    }
    
echo "<br>";

if($secer < $productPrice){
    echo "secer = $secer <br> productPrice = $productPrice <br>";
    echo "cijena secera je mala &#128521<br>";
    }elseif($secer == $productPrice){
        echo "secer = $secer <br> productPrice = $productPrice <br>";
        echo "cijena secera je srednja &#128578<br>";
    }else{
        echo "secer = $secera <br> productPrice = $productPrice <br>";
        echo "cijena secera je velika &#128545<br>";
    }
    

#ZADATAK 24 Učitavanje stranice
/**
* Pokušati napraviti sajt od nekoliko strana, tako da se svaka strana
* učitava u osnovnu stranu, na osnovu klika na dugmić
* 
* Pomoć:
* ▪ Ukoliko u url browsera postavimo neki parametar na sledeći način:
* ▪ .../index.php?page=1
* ▪ Ovaj parametar će biti dostupan unutar php strane, kroz sljedeću promjenljivu:
* ▪ $_GET['page']
* ▪ Iskoristiti <a> tag za kreiranje linkova sa parametrima, te neki Lorem Ipsum tekst (lipsum.org) za
*   stranice, te naravno include/require za učitavanje stranice u osnovnu
*/


?>
