<?php

use Preuzeo\Sa\Interneta\User as UserExternal;
use Ja\Pravio\Klasu\User as UserInternal;

require "User.class.php";
require "User.php";

$externa = new UserExternal();
$externa->write();

$interna = new UserInternal();
$interna->write();




?>