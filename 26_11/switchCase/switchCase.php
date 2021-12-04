<?php
#$nizGradova=("BiH"=>"Sarajevo", "Hrvatska" => "Mostar", "Srbija" => "Beograd");
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


echo "<br>" . "1-dio-kraj" . "<br>";


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


echo "<br>" . "2-dio-kraj" . "<br>";


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


echo "<br>" . "3-dio-kraj" . "<br>";


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


echo "<br>" . "4-dio-kraj" . "<br>";


# TERARNI OPERATOR
// Zamjena za if, (upit)? izvrsava se ako je upit True: Izvrsava se ako je upit False; npr:
$broj=2;
echo ($broj>3)?"Jeste":"Nije";
$rezultat = ($broj>3)?"Jeste":"Nije";


echo "<br>" . "5-dio-kraj" . "<br>";


# a ko bi ovo htjeli napisati u if else:
$broj=2;
if($broj<3){
    $rezultat = "Jeste";
}else{
    $rezultat = "Nije";
}
echo $rezultat;


echo "<br>" . "6-dio-kraj" . "<br>";


# 

?>
