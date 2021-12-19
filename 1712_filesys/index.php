<?php

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

//echo $_SERVER["DOCUMENT_ROOT"];



?>