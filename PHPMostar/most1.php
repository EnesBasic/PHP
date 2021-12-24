<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if (isset($_POST["submit"])){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        if($user === "admin" && $pass === "1234"){
        echo "welcome" ." " . $user;
        echo " .Password and username matched!";
        }else{
            echo "error! please enter correct data!";
        }
    }

    ?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     <table align="center">
         <tr>
             <td>username:</td>
             <td><input type="text" name="username" placeholder="enter your username..."></td>
         </tr>
         <tr>
             <td>password:</td>
             <td><input type="password" name="password" placeholder="enter your password..."></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
     </table>
    </form>
</body>
</html>



<?php





?>