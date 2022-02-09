<?php

require "connection.php";

if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
    $sql_delete = "DELETE FROM user WHERE id=$id";

    $connection->exec($sql_delete);
    //Dodati provjeru da li je obrisano ili ne
    header("Location:index.php");
}

?>
