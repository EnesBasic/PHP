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
    <label for="username">Unesi uername</label>
    <input type="text" name="username" required>
    <br><br>
    <label for="password">Unesi password</label>
    <input type="text" name="password" required>
    <br><br>
    <input type="submit" value="Registuj se">
    </form>

    <?php
    if (isset($_POST["username"])&& isset($_POST["password"])){
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
            header("Location: index.php");

            
        }else{
              echo "<span> Prazno!</span>";
        }
    }else{
          echo "<span> Nije poslano!!</span>";
    }

    ?>

</body>
</html>