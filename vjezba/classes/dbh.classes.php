<?php

class Dbh
{
    private function __construct(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch(PDOException $e){
            print "ERROR !:" . $e->getMessage() . "<br/>";
            die();
        }
    }

}
?>