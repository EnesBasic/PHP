<?php

if(file_exists("log.json")){
    $log = file_get_contents("log.json");
    $log = json_decode($log, true);
}

foreach($log as $stavka){
    if($stavka["page"]==="index.php"){
        if($stavka["changed"]===0){
            if(file_exists("sadrzaj.txt")){
                echo file_get_contents("sadrzaj.txt");
                }
        }else
         //zapocinjemo output buffering
    ob_start();
    
    //stavljamo regularni kod koji bi sei inace izvrio
    for($i = 0; $i < 1000; $i++){
        echo "Hello world <br>";
    }

    //sacuvamo rezultat bufferinga u varijablu
    $content= ob_get_contents();

    //sacuvamo rezultat bufferinga u fajl
    file_put_contents("sadrzaj.txt", $content);

    //postavljanje da vise nema izmjene ida se moze ucitati buferovani fajl

    //cuvamo u log file da se desila izmjena nad ovim fajlom
     if(file_exists("log.json")){
        $log = file_get_contents("log.json");
        $log = json_decode($log, true);
    }else{
        $log = array();
    }

    foreach($log as $stavka){
        if($stavka["page"]==="index.php"){
            $stavka["changed"]=0;
        }
    }

    file_put_contents("log.json, $log");

    //prekidamo buffering (radimo flush)
    ob_end_clean();

    //konacni ispis bufferrovanog sadrzaja
    echo $content;
    }
    }
   
?>