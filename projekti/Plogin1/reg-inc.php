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
        <?php
        
        ini_set('error_reporting', E_ALL);
        ini_set( 'display_errors', 1 );

        if (isset($_POST["username"]) && isset($_POST["passwprd"])){
                if (!empty($_POST["username"]) && !empty($_POST["password"])){
                        $username=$_POST["username"];
                        $password=$_POST["password"];
                
                if(file_exists("baza.json")){
                $useri = file_get_contents("baza.json");
                $useri = json_decode($useri,true);
                }else{
                $useri = array();
                }

                $useri[] = array("username" => $username, "password" => $password);
                file_put_contents("baza.json", json_encode($useri));
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