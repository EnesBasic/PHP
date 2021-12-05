<?php
$vrijednost = 2;

# u switchu promijenimo vrijednost varijable na samo jednom mjestu 
switch($vrijednost){
    case 0:
        echo "broj je nula";
    break;
    case 1:
        echo "broj je jedan";
        break;
    case 2:
        echo "Broj je dva!";
        break;
    default:
        echo "broj nije ni nula, ni jedan, ni dva!";
        break;
    }
    ?>

<h3>---------------------------------1-dio-kraj--------------------------------</h3>

<?php
# a u IF uslovu moramo isto to promijeniti na tri mjesta plus mogucnosti greske
if($vrijednost === 0){
    echo "Broj je nula";
}elseif($vrijednost === 1){
    echo "Broj je jedan!";
}elseif($vrijednost === 2){
    echo "Broj je dva!";
}else{
    echo "Broj nije ni nula, ni jedan ni dva!";
}
?>

<h3>---------------------------------2-dio-kraj--------------------------------</h3>

<?php
# Prvi primjer upotrebe Switcha
$status_korisnika = "7";
switch($status_korisnika){
    case 0:
        require "admin.php";
        break;
    case 1:
        require "moderator.php";
        break;
    case 2:
        require "user.php";
        break;
    case 3:
        echo "User is blocked!";
        break;
    case 4:
        echo "User is deleted!";
        break;
    default:
        echo "No such user type here!";
        break;

}
?>

<h3>---------------------------------3-dio-kraj--------------------------------</h3>

<?php
# Drugi primjer upotrebe Switcha
$naredba = "idi";
switch ($naredba){
    case "idi":
    case "kreni":
    case "pocni":
    case "iniciraj":
        echo "Nesto je zapoceto!";
        break;
    case "stani":
    case "stopiraj":
    case "zaustavi":
        echo "Nesto je zaavrseno!";
        break;
}
?>

<h3>---------------------------------4-dio-kraj--------------------------------</h3>

<?php
# TERNARNI OPERATOR
// Zamjena za if, (upit)? izvrsava se ako je upit True: Izvrsava se ako je upit False; npr:
$broj=2;
echo ($broj>3)?"Jeste":"Nije";
$rezultat = ($broj>3)?"Jeste":"Nije";
?>

<h3>---------------------------------5-dio-kraj--------------------------------</h3>

<?php
# a ko bi ovo htjeli napisati u if else:
$broj=2;
if($broj<3){
    $rezultat = "Jeste";
}else{
    $rezultat = "Nije";
}
echo $rezultat;
?>

<h3>---------------------------------6-dio-kraj--------------------------------</h3>

<?php

#ZADATAK 26 Status korisnika i ternarni
/**
Problem:
U aplikaciju ulazi status korisnika kroz promjenljivu $userStatus.
Potrebno je uz pomoć ternarnog operatora formirati poruku u
promjenljivoj $userMessage. 
-Ukoliko je status 1,2 ili 3, poruka mora biti
Welcome user. 
-Ukoliko status nije 1,2 ili 3, poruka treba da glasi:
Unknown user.
 */

$userStatus = 15;
echo $userMessage=($userStatus==1)?"Welcome user 1":(($userStatus==2)?"Welcome user 2":(($userStatus==3)?"Welcome user 3":"Unknown User"));
?>

<h3>---------------------------------7-dio-kraj--------------------------------</h3>

<?php

# 27 - Vremenska prognoza
/**Dat je sljedeći kod:
<?php
$currentTemperature = mt_rand(0,45);
$rain
= mt_rand(0,1)==1;
$mud
= mt_rand(0,1)==1;

Potrebno je kreirati php aplikaciju sa
sljedećim izlazom:
- Ukoliko je prijavljena kiša, treba prikazati oblak i kao preporučenu odjeću: čizme
- Ukoliko je iznad 25 stepeni, treba prikazati sunce (samo ukoliko nije prijavljena kiša),
- I kao preporučenu odjeću prikazati majicu
- Ukoliko je prijavljeno blato, treba, kao preporučenu odeću prikazati čizme
- Ukoliko je ispod 26 stepeni, treba kao preporučenu odeću prikazati jaknu

*/






?>