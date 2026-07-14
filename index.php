<?php

$action = $_GET['action'];

$controller = $_GET['home'];

$product_object = new stdClass();

$home = new stdClass();

if ($controller === 'products') {

    require 'src/controllers/Products.php';

    $product_object = new Products;

} elseif ($controller === 'index') {

    require 'src/controllers/Home.php';

    $home = new Home;

}

if ($action === 'index') {

    $product_object->index();

} else if ($action === 'show') {

    $product_object->show();

}
