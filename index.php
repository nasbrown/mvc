<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode("/", $path);

$controller = $segments[2];

$action = $segments[3];

$controller = ucfirst($controller);

require "src/controllers/$controller.php";

$controller_obj = new $controller;

$controller_obj->$action();
