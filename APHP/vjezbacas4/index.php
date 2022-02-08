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

    $date = date("H:i:s d.m.Y");

    $sql_insert = "INSERT INTO user 
    (name, password, datetime, status)
    VALUES ('Rampage', '5678', '{$date}', '1')";

    $conn->exec($sql_insert);

}catch(PDOException $e){
    echo "connection error: " .$e->getMessage();
}

$conn = null;
?>
