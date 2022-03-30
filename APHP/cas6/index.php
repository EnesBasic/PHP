<?php

require "model.class.php";
require "controller.class.php";
require "view.class.php";

if(isset($_GET["page"])){
    $page = $_GET["page"];
}

$model = new Model($page);
$controller = new Controller($model);
$view = new View($controller);

echo $view->output();
