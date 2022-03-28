<?php

/**ini_set ('display_errors', 'on');
*ini_set ('log_errors', 'on');
*ini_set ('display_startup_errors', 'on');
*ini_set ('error_reporting', E_ALL);
*/

use Database\Connection as DC;
use Database as DB;
use Project as PR;


require "Connection.class.php";
require "Database.class.php";
require "Invoice.class.php";
require "Project.class.php";
require "User.class.php";


$connection = new DC\Connection();
$database = new DB\Database();
$invoice = new PR\Invoice();
$project = new PR\Project();
$user = new PR\User();


?>

