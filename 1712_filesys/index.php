<?php

$text = "5678";
file_put_contents("test.txt", $text);

$sadrzaj1 = "ovo je neka recenica";
file_put_contents("proba1.txt", $sadrzaj1);

$sadrzaj2 = 1234567890;
file_put_contents("proba2.txt", $sadrzaj2);

$sadrzaj3 = array("korisnik1", "korisnik2", "korisnik3");
file_put_contents("proba3.txt", $sadrzaj3);

//echo $_SERVER["DOCUMENT_ROOT"];



?>