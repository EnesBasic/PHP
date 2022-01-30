<?php


ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

$servername="localhost";
$username = "root";
$password = "";
$database = "ita_app";

try{
    $connection=new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection established";
    //mozemo logovati uspjesnu konekciju
    
    //pripremamo upit koji cemo izvrsiti
    $sql = $connection->prepare("SELECT * FROM user");

    //naredni korak izvrsimo sam upit
    $sql->execute();

    //Fetch mode i da preuzemo same podatke i na neki nacin ispisemo van baze podataka
    // dobavljanje iz baze asocijativni niz
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

    $results = $sql->fetchAll();

    //Provjera da li imamo ikako reaultate()ovo nije za produkciju)
    //var_dump($results);
    
    //Prolazimo kroz rezultate (value je opet sam red koji je opet podniz)
    echo "<ul>";
    foreach ($results as $column => $value){
        //Prva generalna upotreba podataka: ISPIS
        //name bi mogli da boldiramo
        echo "<li><strong>".$value["name"]."</strong></li>";
        echo "<li>".$value["password"]."</li>";
        echo "<li>".$value["datetime"]."</li>";

        //Druga generalna upotreba : AKTIVIRANJE NEKE FUNKCIONALNOSTI
        if($value["status"]=="1"){
            echo "<li>Aktivan korisnik</li>";
            //header("Location: dashboard.php")
        }else{
            echo "<li>NeAktivan korisnik</li>";
            //header("Location: inactive.php")
        }
        echo "<br>";
    }

    echo "</ul>";

    //Kako dobiti automatski vrijeme i datum
    $date = date("H:i:s d.m.Y");


    //Unos samih podataka

    $sql_insert = "INSERT INTO user
    (name, password, datetime, status)
    VALUES
    ('rampage', '5678','{$date}' ,'1')";

    //Izvrsavanje samog query-a
    $connection->exec($sql_insert);

}catch(PDOException $e){
    //echo "Connection failed!".$e->getMessage();
    //mozemo logovati neusojesnu konekciju 

}

//ponistavanje konekcije
$connection = null;


?>