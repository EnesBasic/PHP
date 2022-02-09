<?php

require "connection.php";

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <title>Delete</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = $connection -> prepare("SELECT * FROM user WHERE id=$id LIMIT 1");
        $sql -> execute();
        $result = $sql -> setFetchMode(PDO::FETCH_ASSOC);

        if(count($results = $sql -> fetchAll())){
            $id = $results[0]['id'];
            $name = $results[0]['name'];
            $password = $results[0]['password'];
            $datetime = $results[0]['datetime'];
            $status = $results[0]['status'];

        }else{
            header('Location: index.php');
            //vratiti gresku ovdje
        }
    }else{
        header('Location: index.php');
        //Mozete vratiti kroz get nazad gresku u index.php
    }
    
    ?>
    <div class="wrapper">
        <form action="delete_function.php" method="POST">
            <h1>Dali ste sigurni da zelite obrisati ovog korsnika</h1>
            <ul>
                <li>Ime: <?php echo $name; ?> </li>
                <li>Datum i Vrijeme:<?php echo $datetime?> </li>
                <?php
                
                if($status){
                    echo "<li>Status: Aktivan </li>";
                }else{
                    echo "<li>Status: Neaktivan </li>";
                }
                ?>
            </ul>
            <br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Obrisi Korisnika">
            <a href="index.php">Idi nazad</a>
        </form>
    </div> 
</body>
</html>