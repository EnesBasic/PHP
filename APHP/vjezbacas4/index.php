<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

//require "connection.php";

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
    <title>Dashboard</title>
</head>

<body>
       
<!--

    $sql = $connection->prepare("SELECT * FROM user");
    $sql->execute();
    $result = $sql->setFechMode(PDO::FECTH_ASSOC);
    $results = $sql->fetchAll();
    ?>
-->
    <div class="wrapper"> </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PASSWORD</th>
                    <th>DATE AND TIME</th>
                    <th>STATUS</th>
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

                        if($value["status"]=="1"){
                            echo "<td> Aktivan </td>";
                        }else{
                            echo "<td> NeAktivan </td>"; 
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
