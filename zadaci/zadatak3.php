<?php

# Primjer:

$user = 1;
$admininstrator = 2;
$superAdministrator = 4;

$loggedUser = 2;
$allowedUsers = $admininstrator | $superAdministrator;

if(($loggedUser & $allowedUsers)!= 0){
    echo "Hello, this is allowed";
}else{
    echo "User is not allowed";
}


echo "<br>" . "1-dio kraj" . "<br>";
echo "<br>";


# ZADATAK 4
/**Kreira se aplikacija za online učenje. Aplikaciji treba da pristupaju:
studenti, profesori, koordinatori nastave i tehnička podrška
Svaka od ovih kategorija mora biti reprezentovana kroz određeni
broj upotrebljiv za kreiranje bit maske
Potrebno je kreirati bit masku kojom će se reprezentovati zona
sajta koja će biti dostupna samo tehničkoj podršci i koordinatorima
Potrebno je krerati stranu, u kojoj će se simulirati pristup od strane
jednog korisnika koji pripada nekoj od pomenutih pristupnih
kategorija (hard kodirana promjenljiva)
Potrebno je na strani prikazati da li korisnik može da joj pristupi
(samo izlaz boolean promjenljive)
**/

/**
Bit shift operator pomjera bitove ulijevo ili udesno
Rezultat prethodnog primjera će biti 8. Da bi razumjeli zašto,
pogledajmo bitove u ovom programu:
o Prvobitno stanje x: 2 je binarno 0010
o Nakon pomjeranja bitova u lijevo za dva mjesta (x<<2) broj je
binarno dobio sljedeću strukturu: 1000
o Nakon prikaza broja u decimalnoj notaciji, dobijamo broj 8
Po istom principu funkcioniše i pomjeranje bitova u desnu stranu
**/

// kao u sljedecem primjeru:

$x = 2;
$x = $x << 2;
echo $x;


echo "<br>" . "2-dio-kraj" . "<br>";
echo "<br>";


# ZADATAK 5
/** 
*Kreirati mini aplikaciju za prikaz teatra
*Uraditi tačnu HTML strukturu (ukoliko neko poznaje CSS može
*uraditi i stilizaciju)
*U prikazu teatra uključiti podatke koji su definisani u varijablama:
*• ime teatra
*• godina osnivanja
*• mjesto gdje teatar postoji
*• tipovi dramskih predstava koje se izvode
*• tipične cijene karata 
 */


echo "** uraditi naknadno ovaj zadatak !!";
echo "<br>" . "3-dio-kraj" . "<br>";
echo "<br>";


# ZADATAK 6
/**
Kreira se aplikacija za kalkulaciju potrošnje goriva automobila
Unutar aplikacije definisani su: potrošnja goriva, stanje u
rezervoaru, očekivana distanca koju automobil treba da pređe.
• Takođe, unutar aplikacije, definisane su konstante za često
korišćene fiksne pojmove (oznaka distance, zapremina i jedinica
mjere potrošnje goriva)
• Potrebno je kreirati aplikaciju koja na osnovu datih podataka
prikazuje očekivanu distancu, očekivanu potrošnju goriva i da li će
automobil imati dovoljno goriva za očekivani put
-------------------------------------------------------------------------------------------
- Dodatno možemo izračunati da li će automobil morati da stane na
pumpu za gorivo
*/
$potrosnja = 7;
$rezervoar = 75;
$distanca = 2856;

echo 'potrosnja = 7 <br>';
echo 'rezervoar = 75 <br>';
echo '$distanca = 2856 <br>';
echo '<br>';

$V = ($rezervoar/$potrosnja)*100;
if($V>$distanca){
    printf("Automobil ce preci " .$V. "Kilometar");
}elseif($V<$distanca){
$L = $distanca - $V;
$predeno = $L;
printf("automobil nema dovoljno da predje cijelu distancu, jer mu nedostaje gorivo za narednih %.2f",$L);
echo " KM";
echo "<br>";
printf("Automobil mora stati na pumpu jer ce preci od %.2f", $V);
printf("KM od %.2f", $distanca);
echo " KM";
}


echo "<br>" . "4-dio-kraj" . "<br>";
echo "<br>";


# ZADATAK 7
/**
*Kreirati novi .php fajl.
*Unutar njega definirati godinu rođenja i trenutnu godinu
*Matematički dobiti broj godina korisnika
*Ispisati na izlaz broj godina korisnika
*--------------------------------------------------------------
 */

$god_rodenja = 1980;
$tren_godina = 2021;
$korisnik_age = $tren_godina - $god_rodenja;
echo "Korisnik ima ".$korisnik_age." godina";


echo "<br>" . "5-dio-kraj" . "<br>";
echo "<br>";


# ZADATAK 10 Ispis kroz printf() funkciju
/**
Pokušajte da pomoću funkcije printf, prikažete sljedeći izlaz:
Broj 13 je u oktalnom sistemu broj ...
Broj 03 je u heksadecimalnom sistemu broj ...
Broj 17 je u binarnom sistemu broj ...
 */

/**
 * In decimal to binary, we divide the number by 2
 * in decimal to hexadecimal we divide the number by 16.
 * In case of decimal to octal, we divide the number by 8
 * and write the remainders in the reverse order to get the equivalent octal number.
 */


/**
Required. Specifies the string and how to format the variables in it.

Possible format values:

    %% - Returns a percent sign
    %b - Binary number
    %c - The character according to the ASCII value
    %d - Signed decimal number (negative, zero or positive)
    %e - Scientific notation using a lowercase (e.g. 1.2e+2)
    %E - Scientific notation using a uppercase (e.g. 1.2E+2)
    %u - Unsigned decimal number (equal to or greather than zero)
    %f - Floating-point number (local settings aware)
    %F - Floating-point number (not local settings aware)
    %g - shorter of %e and %f
    %G - shorter of %E and %f
    %o - Octal number
    %s - String
    %x - Hexadecimal number (lowercase letters)
    %X - Hexadecimal number (uppercase letters)
*/

$x = 2;
printf("x is whole %d, decimal %.2f, and binary %b", $x,$x,$x);
#output:
#x is whole 2, decimal 2.00, and binary 10
echo "<br>";

$x = 13;
// NETACNO --> printf("Broj 13 je oktalnom sistemu broj ".octdec("13"));
echo "<br>";
printf("Broj 13 u oktalnom sistemu je %o",$x );
echo "<br>";

$y = 03;
printf("Broj 03 u hexadecimalnom sistemu je broj %x", $y);
echo "<br>";

$k = 17;
printf("Broj 17 u binarnom sitemu je broj %b", $k);


echo "<br>" . "6-dio-kraj" . "<br>";
echo "<br>";

?>