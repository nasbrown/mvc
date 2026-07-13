<?php

class Controller{
    public function index() {
        require 'Model.php';

        $model = new Model();

        $products = $model->getData();

        require 'view.php';
    }
}