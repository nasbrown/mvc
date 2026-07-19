<?php

$action = $_GET['action'];

$controller = $_GET['controller'];

$controller = ucfirst($controller);

require "src/controllers/$controller.php";

$controller_obj = new $controller;

$controller_obj->$action();
