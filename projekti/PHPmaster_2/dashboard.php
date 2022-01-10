<?php
session_start();
?>

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
        <input type="text" name="firstname" required placeholder="insert firstname...">
        <br>
        <input type="text" name="lastname" required placeholder="insert lastname...">
        <br>
        <input type="text" name="category1" required placeholder="insert first...">
        <br>
        <input type="text" name="category2" required placeholder="insert second...">
        <br>
        <input type="text" name="category3" required placeholder="insert third...">
        <br>
        <input type="text" name="twitter" required placeholder="insert twitter link...">
        <br>
        <input type="text" name="facebook" required placeholder="insert facebook link...">
        <br>
        <input type="text" name="dribbble" required placeholder="insert dribbble link...">
        <br>
        <input type="text" name="github" required placeholder="insert github link...">
        <br>
        <input type="text" name="email" required placeholder="insert your email...">
        <br>
        <input type="text" name="text1" required placeholder="insert footer text...">
        <br>
        <input type="text" name="text1" required placeholder="insert footer link text...">
        <br>
        <input type="text" name="text2" required placeholder="insert footer link...">
        <br><br>
        <input type="submit" value="Insert data">
        <br>
    </form>
    <?php
        if(isset($_POST["firstname"]) && !empty($_POST["firstname"])){
            $user_data = array(
                "firstname" => $_POST["firstname"],
                "lastname" => $_POST["lastname"],
                "category1" => $_POST["category1"],
                "category2" => $_POST["category2"],
                "category3" => $_POST["category3"],
                "twitter" => $_POST["twitter"],
                "facebook" => $_POST["facebook"],
                "dribbble" => $_POST["dribbble"],
                "github" => $_POST["github"],
                "email" => $_POST["email"],
                "text1" => $_POST["text1"],
                "text2" => $_POST["text2"],
                "link" => $_POST["link"]
            );
            if(file_exists("users-data.json")){
                $users_data = file_get_contents($users_data);
                $users_data = json_decode($users_data, true);
            }{
                $users_data = array();
            }
            $users_data[$_SESSION["username"]]= $user_data;
            if(file_put_contents("users-data.json", json_encode($users_data))){
                echo "<br>";
                echo "<span>Data saved!!!</span>";
            }else{
                echo "<span style='color: red'>ERROR in saving data!!!</span>";
            }
        }
        echo "<a href='index.php?user=" . $_SESSION["username"] . "'>Pogledaj svoj profil</span>";
?>
</body>
</html>