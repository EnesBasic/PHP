<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);


require "connection.class.php";
require "database.class.pphp";
require "invoice.class.php";
require "project.class.php";
require "user.class.php";

$connection  = new Database\Connection\Connection();

?>