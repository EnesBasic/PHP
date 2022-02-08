<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

require "connection.php";

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
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    
    $sql = $connection -> prepare("SELECT * FROM user");
    $sql->execute();
    $result = $sql -> setFetchMode(PDO::FETCH_ASSOC);
    $results = $sql-> fetchAll();
    ?>
    <div class="wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PASSWORD</th>
                    <th>DATE and TIME</th>
                    <th>STATUS</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                    
                        foreach($results as $column => $value){
                            echo "<tr>";
                                echo "<td>" .$value["id"]. "</td>";
                                echo "<td>" .$value["name"]. "</td>";
                                echo "<td>" .$value["password"]. "</td>";
                                echo "<td>" .$value["datetime"]. "</td>";

                                if ($value["status"] == "1"){
                                    echo "<td> Aktivan </td>";
                                }else{
                                    echo "<td> Neaktivan </td>";
                                }
                            
                                echo "<td><a href='edit.php?id=" . $value["id"] . "'>Edit</a></td>";
                                echo "<td><a href='delete.php?id=" . $value["id"] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                    
                    ?>
                </tbody>
        </table>
    </div>

    //<?php  
    //if(isset($_GET["message"]) && !empty($_GET["message"])){
    //    echo "<h2>" .$_GET["message"]. "</h2>";
    //}
    ?>

</body>
</html>