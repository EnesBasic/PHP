<?php

require "model.class.php";
require "controller.class.php";
require "view.class.php";


$model = new Model;
$controller = new Controller($model);
$view = new View($controller);

echo $view->output();
?>