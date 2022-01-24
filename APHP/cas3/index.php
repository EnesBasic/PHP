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
$sql = "INSERT INTO user(username, password, email)VALUES('enesbasic','1234','enes@basic.com')";
if($connection->query($sql)=== TRUE){
    echo "User inserted successfully!";
}else{
    echo "ERROR" .$connection->error;
}


// Update podataka
$sql = "UPDATE user SET username='imac' WHERE id=3";
//Provjera da lije sql upit uspio
if($connection->query($sql)===TRUE){
    echo "User edited successfully!";
}else{
    echo "ERROR!".$connection->error;
}

// Brisanje korisnika
$sql = "DELETE FROM user WHERE id=2";
if($connection->query($sql)===TRUE){
    echo "User deleted successfully!";
}else{
    echo "ERROR!".$connection->error;
}

?>