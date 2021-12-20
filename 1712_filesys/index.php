<?php

//ucitavanje fajlova

$text = "5678";
file_put_contents("test.txt", $text);

$sadrzaj1 = "ovo je neka recenica";
file_put_contents("proba1.txt", $sadrzaj1);

$sadrzaj2 = 1234567890;
file_put_contents("proba2.txt", $sadrzaj2);

$sadrzaj3 = array("korisnik1", "korisnik2", "korisnik3");
file_put_contents("proba3.php", $sadrzaj3);

$sadrzaj4 = array("korisnik1", "korisnik2", "korisnik3");
file_put_contents("proba4.php", json_encode($sadrzaj4));

$sadrzaj5 = array("username" => "batman", "password"=>"alfred");
file_put_contents("proba5.php", json_encode($sadrzaj5));

$sadrzaj6 = array(
    array("username"=>"amar", "password"=>"1234"),
    array("username"=>"adis", "password"=>"5678"),
    array("username"=>"enes", "password"=>"9012")
);

file_put_contents("proba6.php", json_encode($sadrzaj6));

// Citanje iz fajlova

$procitani_sadrzaj1 = file_get_contents("proba1.txt");
var_dump($procitani_sadrzaj1);

$procitani_sadrzaj2 = file_get_contents("proba6.php");
//$procitani_sadrzaj2 = json_decode(file_get_contents("proba6.php"), true);
$procitani_sadrzaj2 = json_decode($procitani_sadrzaj2, true);
var_dump($procitani_sadrzaj2);

echo "<br><br>";

foreach($procitani_sadrzaj2 as $korisnik){
    echo $korisnik["username"] . " " . $korisnik["password"] . "<br>";
}


//echo $_SERVER["DOCUMENT_ROOT"];



?>