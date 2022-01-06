<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
    <label for="username">Unesi username</label>
    <input type="text" name="username" required>
    <br><br>
    <label for="password">Unesi password</label>
    <input type="text" name="password" required>
    <br><br>
    <input type="submit" value="Registuj se">
    </form>

<?php

    ini_set('error_reporting', E_ALL);
    ini_set( 'display_errors', 1 );

    if (isset($_POST["username"]) && isset($_POST["password"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(file_exists("korisnici.json")){
                $korisnici = file_get_contents("korisnici.json");
                $korisnici = json_decode($korisnici, true);
            }else{
                $korisnici = array();
            }

            $korisnici[] = array("username" => $username, "password" => $password);
            file_put_contents("korisnici.json", json_encode($korisnici));
            header("Location: provjera.php");

        }else{
              echo "<span> Prazno!</span>";
        }
    }else{
          echo "<span> Nije poslano!!</span>";
    }

?>

</body>
</html>