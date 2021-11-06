<p>Ovo je neki neivdeno doba tekst...</p><?phpecho "<h1>Dobro dosli na moju web stranicu</h1>";echo "Rezultat je: " ;# jednolinijski kometar echo 2+2;echo 2+2;
// jednolinijski komentar/*Ovo je viselinijski kometarvidi sta sam napisao

*/
/** * * * * */
?>
<h2>Naslov broj 2</h2>
<?php
$ime = "John";$prezime = "Wayne";$broj_godina = 99;$stanje_racuna = 285.89;

echo "pozdrav, ".$ime." ".$prezime.". Tvoj broj godina je: ".$broj_godina;echo "stanje racuna: " .$stanje_racuna." KM";echo $ime . $prezime;
$ime_korisnika="Donald";$ime_korisnika="Haris";
//Definisanje konstante//define ("X", 10);//echo "<h3>" . X . "</h3>"
define("IME","Bruce");define("Godine",35);define("Stanje",245.46);
echo "<br>";echo "<p>Ime: ".IME. "</p>";echo "<p>Godine: ".Godine. "</p>";echo "<p>Stanje: ".Stanje. "</p>";
$ime_firme="ITAcademy";define("BROJ_ODSJEKA", 30);
echo "<p>".$ime_firme. "</p>";

?>
extenzija php intellisense