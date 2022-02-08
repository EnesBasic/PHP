<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ita_app";

try{
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection established";
    $sql = $connection->prepare("SELECT * FROM user");
    $sql->execute();
    $result = $sql->setFechMode(PDO::FETCH_ASSOC);
    $results = $sql->fetchAll();
    foreach($results as $column => $value){
        echo "<li>";
        echo "<li>" .$value["id"]. "</li>";
        echo "<li>" .$value["name"]. "</li>";
        echo "<li>" .$value["password"]. "</li>";
        echo "<li>" .$value["datetime"]. "</li>";

        if($value["status"]=="1"){
            echo "<li> Aktivan </li>";
        }else{
            echo "<li> NeAktivan </li>"; 
        }
    }
}catch(PDOException $e){
    echo "connection error: " .$e->getMessage();
}

$connection= null;
?>
