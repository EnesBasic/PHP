<?php

require "connection.php";

if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $status = $_POST['status'];
    $datetime = date("H:i:s d.m.Y");

    $sql_update = "UPDATE user SET 
    name ='{$name}',
    password = '{$password}', 
    status= '{$status}',
    datetime = '{$datetime}'
    WHERE id=$id";

    $result = $connection->prepare($sql_update);
    $result->execute();

    if($result->rowCount() > 0){
        header("Location:index.php");
        //Uraditi success message, slicno kao sa greskama .da znamo da je update uspjesan
        echo "Uspjesan update!";
    }else{
        //vratiti gresku ako se desilat
        echo "greska update";
    }
}

?>