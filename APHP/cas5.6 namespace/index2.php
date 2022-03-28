<?php


use Database\Connection\Connection as Connection;
use Database\Database as Database;
use Project\Invoice as Invoice;
use Project\Project as Project;
use Project\User as User;

require "Connection.class.php";
require "Database.class.php";
require "Invoice.class.php";
require "Project.class.php";
require "User.class.php";

$connection = new Connection();
$database = new Database();
$invoice = new Invoice();
$project = new Project();
$user = new User();


?>