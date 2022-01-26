<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <input type="number" name="rollno" placeholder="Roll_No" value="<?php echo ($rollno);?>"> <br><br>
        <input type="text" name="fname" placeholder="name..." value="<?php echo ($fname);?>"> <br><br>
        <input type="text" name="lname" placeholder="lastname..." value="<?php echo ($lname);?>"><br><br>
        <input type="text" name="adres" placeholder="address..." value="<?php echo ($adres);?>"><br><br>
        <input type="text" name="email" placeholder="example@example.com" value="<?php echo ($email);?>"><br><br>
        <div>
            <input type="submit" name="insert" value="Add">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="search" value="Find">
        </div>
    </form>
</body>
</html>