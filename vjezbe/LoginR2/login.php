<?php
    
    ini_set('error_reporting', E_ALL);
    ini_set( 'display_errors', 1 );

    if(isset($_POST["uname"]) && isset($_POST["pass"])){
        if(!empty($_POST["uname"]) && !empty($_POST["pass"])){
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];

            $newuser = file_get_contents("baza.json");
            $newuser = json_decode($newuser, true);

            foreach($newuser as $usr){
                if($uname === $usr["uname"] && $pass === $usr["pass"]){
                    session_start();
                    $_SESSION["uname"] = $usr["uname"];
                    $_SESSION["pass"] = $usr["pass"];
                    header("Location: dashboard.php");
                    return;
                }
            }
        }else{header("Locaton: provjera.php?error=prazno");}
    }
else{header("Locaton: provjera.php?error=pogresno");}

?>
</body>
</html>