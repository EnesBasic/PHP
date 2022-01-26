<?php

ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

$servername ="localhost";
$username ="root";
$password = "";
$dbname = "login_project3";

$rollno="";
$fname="";
$lname="";
$adres="";
$email="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);

}catch(mysqli_SQL_Exceptio $ex){
    echo("error connecting");
}

function getData()
{
    $data = array();
    $data[0] = $_POST["rollno"];
    $data[1] = $_POST["fname"];
    $data[2] = $_POST["lname"];
    $data[3] = $_POST["adres"];
    $data[4] = $_POST["email"];
    return $data;
}

if(isset($_POST["search"]))
{
    $info = getData();
    $search_query = "SELECT*FROM users WHERE rollno='$info[0]'";
    $search_result=mysqli_query($conn, $search_query);
    if($search_result)
    {
        if(mysqli_num_rows($search_result))
        {
            while($rows = mysqli_fetch_array($search_result))
            {
                $rollno = $rows['rollno'];
                $fname = $rows['fname'];
                $lname = $rows['lname'];
                $adres = $rows['adres'];
                $email = $rows['email'];
            }

        }else{
            echo ("no data available");
        }
    }else{
        echo ("result error");
    }
}




?>