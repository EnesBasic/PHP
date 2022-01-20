<?php # otvarajuci tag
$a = 15; # greska je bila jer je bioispred znak # --> hash, umjesto znaka $ --> dolara
$Povrsina = $a * $a; # ime varijable je pocinjalo sa brojem sto je nedozvoljeno u PHP-u pa smo to izbacili
$Obim  = 4 * $a; # ispred varijable a je nedsotajao znak $

echo $Povrsina; # ispisuje povrsinu koju smo prethodno zadali za izracun
echo "<br><br>"; # ispisuje svaki br u novom redu
echo $Obim # ispisuje Obim 
?>