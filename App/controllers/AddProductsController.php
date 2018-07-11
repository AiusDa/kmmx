<?php
    namespace App\controllers;

    use \App\Core\Database;

    class AddProductsController extends \App\Core\BaseController
    {
        public function create($productName, $sku, $price, $qty): bool
        {
            try {
                Database::getInstance()->query("
                    INSERT INTO products 
                    (product_name, sku, price, qty) 
                    VALUES ('$productName', '$sku', '$price', '$qty')
                ");
                return true;
            } catch(Exception $e) {
                return false;
            }
        }
    }