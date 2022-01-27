<?php

session_start();

include_once("config.php");

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

echo "Welcome ".$_SESSION['username'];

echo "<a href='logout.php'>Logout</a>";

echo "<a href='update.php'>Update</a>";

echo "<a href='delete.php'>Delete</a>";

?>

