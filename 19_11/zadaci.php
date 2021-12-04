<?php

# Primjer:

$user = 1;
$admininstrator = 2;
$superAdministrator = 4;

$loggedUser = 2
$allowedUsers = $admininstrator | $superAdministrator;

if(($loggedUser & $allowedUsers)!= 0){
    echo "Hello, this is allowed";
}else{
    echo "User is not allowed";
}


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

$x = 2;
$x = $x << 2;
echo $x;


echo "<br>" . "1" . "<br>";


?>