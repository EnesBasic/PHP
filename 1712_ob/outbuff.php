<?php

if(file_exists("sadrzaj.txt")){
    echo file_get_contents("sadrzaj.txt");
    }else{

    //zapocinjemo output buffering
    ob_start();
    
    //stavljamo regularni kod koji bi sei inace izvrio
    for($i = 0; $i < 10000; $i++){
        echo "Hello world <br>";
    }

    //sacuvamo rezultat bufferinga u varijablu
    $content= ob_get_contents();

    //sacuvamo rezultat bufferinga u fajl
    file_put_contents("sadrzaj.txt", $content);

    //prekidamo buffering (radimo flush)
    ob_end_clean();

    //konacni ispis bufferrovanog sadrzaja
    echo $content;
    }


?>