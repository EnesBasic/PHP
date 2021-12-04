<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
# ZADATAK #11 Meni
/**Potrebno je kreirati sajt sa tri strane (home, about us i contact)
*Tri strane sajta koriste isti meni na vrhu strane, pa je neophodno
*smanjiti ponavljanje koda upotrebom funkcije include 
*/

echo "Ovo je ";
include "about.php";
echo "<br>";

echo "Ovo je ";
include "home.php";
echo "<br>";

echo "Ovo je ";
include "us.php";
echo "<br>";

echo "Ovo je ";
include "contact.php";
echo "<br>";

?>
</body>
</html>
