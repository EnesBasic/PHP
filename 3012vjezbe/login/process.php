<?php

if(isset($_POST["login"]))
{
  
    if(!empty($_POST["username"]) || !empty($_POST["password"]))
    {
        header("Location: index.php?Empty=Please fill in the blanks");
    }
    else
    {

    }
}

else
{
    echo "not working now guys!!!";
}




?>