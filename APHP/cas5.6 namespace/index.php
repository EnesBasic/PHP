<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

use Database\Connection as DC;

require "Connection.class.php";
require "Database.class.php";
require "Invoice.class.php";
require "Project.class.php";
require "User.class.php";


$connection = new D\Connection();
$database = new Database\Database();
$invoice = new Project\Invoice();
$project = new Project\Project();
$user = new Project\User();


?>

