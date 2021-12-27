<?php # ovdje smo otvorili tag za otpocinjanje pisanja php code-a
$r = 2; # varijabla kojoj smo dodijelili vrijednost 2 
$PI = 3.14; # varijabla sa vrijednosti PI broja


# takodje u sljedecim varijablama smo morali imijeniti veliko slovo R u malo 
# jer je definisana varijabla sa malim r, a veliko R nije definisano te onda javlja gresku.

{ $area = $r * $r * $PI;} # varijabla koja izracunava area kruga po njenoj formuli 
{ $perimeter = 2 * $r * $PI; } # varijabla koja izracunava perimeter kruga po njenoj formuli


echo $area; # ispisuje varijablu area
echo "<br/>"; # ispisuje tekst area, a potom prelazi u novi red i ispisuje tekst perimeter 
echo $perimeter; # ispisuje perimeter

# dole slijedi zatvarajuci tag
?> 