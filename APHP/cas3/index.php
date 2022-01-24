<?php


ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );


// Pravljenje konekcije na bazu podataka
$connection = new mysqli("localhost", "root", "", "user");
if($connection->connect_error){
    die("Connection failed :" .$connection->connect_error);
}

// Dobavljanje iz baze podataka
$sql = "SELECT  * FROM user";
$result = $connection->query($sql);

if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()){
        echo "id: " .$row["id"]. 
        ", username: " .$row["username"].
        ", password: " .$row["password"].
        ", email: " .$row["email"]. "<br>";
    }
}

// Upis podataka



?>