<?php
    namespace App\controllers;

    use \App\Core\Database;

    class ListProductsController extends \App\Core\BaseController
    {
        public function getProducts()
        {
            return Database::getInstance()->query('SELECT * FROM products');
        }
    }