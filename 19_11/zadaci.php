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


# ZADATAK 5
/** 
Kreirati mini aplikaciju za prikaz teatra
Uraditi tačnu HTML strukturu (ukoliko neko poznaje CSS može
uraditi i stilizaciju)
U prikazu teatra uključiti podatke koji su definisani u varijablama:
• ime teatra
• godina osnivanja
• mjesto gdje teatar postoji
• tipovi dramskih predstava koje se izvode
• tipične cijene karata 
 */


echo "<br>" . "3-dio-kraj" . "<br>";



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

$V = ($rezervoar/$potrosnja)*100;
if($V>$distanca){
    echo "Automobil ce preci " . $V . "Kilometar";
}elseif($V<$distanca){
$L = $distanca - $V;
$predeno = $L;
echo "Automobil mora stati na pumpu jer ce preci od ".$V."KM od ".$distanca." KM";
}




?>