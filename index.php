<?php

$action = $_GET['action'];

$controller = $_GET['home'];

if ($action === 'index' && $controller === 'products') {

    require 'src/controllers/Products.php';

    $product_object = new Products;

    $product_object->index();

} else if ($action === 'show' && $controller === 'index') {

    require 'src/controllers/Products.php';

    $product_object = new Products;

    $product_object->show();

} else if($action === 'home' && $controller === 'homie'){

    require 'src/controllers/Home.php';

    $home = new Home;

    $home->index();
}
