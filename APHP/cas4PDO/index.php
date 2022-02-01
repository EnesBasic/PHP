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
    $date_update = date("H:i:s d.m.Y");


    //Unos samih podataka

    $sql_insert = "INSERT INTO user
    (name, password, datetime, status)
    VALUES
    ('Doli', '5678','{$date_update}' ,'1')";

    //Izvrsavanje samog query-a
    $connection->exec($sql_insert);

    // Trebalo bi da bude nakon INSERTA(Moze biti funkcionalnosti izmedu ali ne sa bazom ako hocemo da funkcionise)
    //Prikaz posljednje unijetog ID-(Ovo je vazano za trenutnu konekciju)
    echo "<p>".$last_insert_id = $connection->lastInsertId() . "</p>";

    //Updateovanje podataka unutar tabele
    //Fromiranje Update datuma (jer recimo zelimo da izmijenimo i timeset sto je pozeljno)
    //Kreiranje upita

    $sql_update = "UPDATE user SET name='Dell' WHERE name='Rampage'";
    // Pormjena datuma $sql_update = "UPDATE user SET name='Dell' datetime='{$date_update}' WHERE name='Rampage'";
    //Priprema upita 
    $result = $connection->prepare($sql_update);
    //Izvrsavanje upita (execute moze da vrati neki rezultat, dok exec ne moze)
    $result->execute();
    //Ispis broja redova koji su se promijenili koristeci ovaj upit iznad
    echo $result->rowCount(). " records updated!"; 

    //Brisanje samih podataka
    //Formiramo SQL upit za brisanje(OBAVEZNO WHERE)
    //Delete se uvijek odvija nad redovima!
    //Ako biste htjeli obrisati jednu kolonu iskoristili bismo UPDATE(npr. SET name='')
    $sql_delete = "DELETE FROM user WHERE name='Dell'";
    //Brisanje samih podataka (redova)
    $connection->exec($sql_delete); 


    


}catch(PDOException $e){
    //echo "Connection failed!".$e->getMessage();
    //mozemo logovati neusojesnu konekciju 

}

//ponistavanje konekcije
$connection = null;


?>