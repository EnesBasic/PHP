<?php

if(isset($_POST["submit"]))
{
    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];
    $email = $_POST["email"];

    //Instantiate SignUp class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $rpwd, $email);



    // Running error handlers and user signup



    
    // Going back to front page







}

?>