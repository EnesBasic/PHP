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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit</title>
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
        <form action="edit_function.php" method="POST">
            <label for="name">Ime:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <br>
            <label for="password">Password:</label>
            <input type="password"  name="password" value="<?php echo $password; ?>">
            <br>
            <label for="status">Status:</label>
            <select name="status">
                <?php
                if($status){
                    echo '<option value="1" selected>Aktivan</option>';
                    echo '<option value="0">Neaktivan</option>';
                }else{
                    echo '<option value="1">Aktivan</option>';
                    echo '<option value="0" selected>Neaktivan</option>';
                }
                ?>
            </select>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="zavrsi uredivanje">
        </form>
    </div>
</body>
</html>
