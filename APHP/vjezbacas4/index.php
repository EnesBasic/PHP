<?php

ini_set ('display_errors', TRUE);
ini_set ('log_errors', TRUE);
ini_set ('display_startup_errors', TRUE);
ini_set ('error_reporting', E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "ita_app";

try{
    $conn = new PDO ("mysql:host=$servername; dbname=$database", $username, $password);
    $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection established";
    $sql = $conn-> prepare("SELECT * FROM user");
    $sql-> execute();

    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    $results = $sql->fetchAll();
 
    echo "<ul>";
    foreach ($results as $column => $value) {
        echo "<li>" .$value["name"]. "</li>";
        echo "<li>" .$value["password"]. "</li>";
        echo "<li>" .$value["datetime"]. "</li>";
        if($value["status"]==1){
            echo "<li> Aktivan korisnik </li>";
            //header("Location:dashboard.php");
        }else{
            echo "<li> Ne Aktivan korisnik </li>";
            //header("Location:inactive.php");
        }
        echo "<li><br></li>";
    }
    echo "</ul>";

    // Kako dobiti automatski datum i vrijeme
    $date = date("H:i:s d.m.Y");

    //Unos samih podataka
    $sql_insert = "INSERT INTO user 
    (name, password, datetime, status)
    VALUES ('Rampage', '5678', '{$date}', '1')";

    //Prikaz posljednje unijetog ID-a (ovo je vezno zatrenutnu konekciju )
    //Dolazi neposredno poslije Inserta(moze biti funkcionalnosti izmedu ali ne sa bazom ako hoce)mo da funckcionise)
    echo "<p>" .$last_insert_id= $conn->lastInsertId(). "</p>";

    //Izvrsavanje samog querija
    $conn->exec($sql_insert);
    echo "<p>Nesto trece...</p>";

    // Updateovanje podataka unutar tabele

    // Formiranje update datuma
    $date_update = date("H:i:s d.m.Y");

    // kreiranje upita
    $sql_update = "UPDATE user SET name='Rampage', datetime='{$date_update}' WHERE name='Dell'";
    
    //Prirpema upita
    $result = $conn->prepare($sql_update);
    
    // Izvrsavanje upita (execute moze da vrati neki rezultat, dok exec ne moze)
    $result -> execute();
    
    //Opcionalno ispis broja redova koji su se promijenili koristeci ovaj upit iznad
    echo $result-> rowCount(). "records updated!";

    //Brisanje samih podataka (OBAVEZNO WHERE)
    //Delete se uvijek odvija nad redovima
    //Ako biste htjeli jednu kolonu iskoristili bismo (npr SET name='')
    // Formiramo SQL upit za brisanje
    $sql_delete= "DELETE FROM user WHERE name='Rampage'";
    
    //Brisanje samih redova
    $conn->exec($sql_delete);









}catch(PDOException $e){
    echo "connection error: " .$e->getMessage();
}

$conn = null;
?>
