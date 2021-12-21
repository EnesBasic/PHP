<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="page">Unesi sasdrzaj stranice:</label>
        <textarea name="page"></textarea>
        <br>
        <input type="submit" value="Unesi sadrzaj!">
    </form>

<?php

if (isset($_POST["page"]) && !empty($_POST["page"])){
    $content = $_POST["page"];
    if(file_exists("index-content.php")){
        $file_content = file_get_contents("index-content.php");
    }else{
        $file_content = "";
    }

    $file_content .=$content;
    file_put_contents("index-content.php", $file_content);
     //cuvamo u log file da se desila izmjena nad ovim fajlom
     if(file_exists("log.json")){
        $log = file_get_contents("log.json");
        $log = json_decode($log, true);
    }else{
        $log = array();
    }


    $log[]=array("page" => "index.php", "changed" => "1");
    file_put_contents("log.json", json_encode($log));

}else{
    echo "<span> Poslali ste prazan sadzaj stranice! </span>";
}

?>


</body>
</html>