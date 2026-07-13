<?php

require 'src/controllers/Products.php';

$product = new Products();

$action = $_GET['action'];

if($action === 'index'){
    $product->index();
} else if($action === 'show'){
    $product->show();
}

