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
        echo "<li>".$value["name"]."</li>";
        echo "<li>".$value["password"]."</li>";
        echo "<li>".$value["datetime"]."</li>";
        if($value["status"]=="1"){
            echo "<li>Aktivan korisnik</li>";
        }else{
            echo "<li>NeAktivan korisnik</li>";
        }
    }

}catch(PDOException $e){
    //echo "Connection failed!".$e->getMessage();
    //mozemo logovati neusojesnu konekciju 

}

//ponistavanje konekcije
$connection = null;


?>