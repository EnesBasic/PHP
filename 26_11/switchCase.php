<?php
#$nizGradova=("BiH"=>"Sarajevo", "Hrvatska" => "Mostar", "Srbija" => "Beograd");
$vrijednost = 2;

# u switchu promijeniom vrijednost varijable na samo jednom mjestu 
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

echo "<br>";

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

echo "<br>";

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
