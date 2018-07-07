<?php
    require __DIR__ . '/App/Core/Config.php';
    require __DIR__ . '/vendor/autoload.php';
    use \App\Core\Database;
    use \App\Core\Router;

    require_once "./app/core/Helpers.php";
    define('VIEWS_DIR', __DIR__ . "/App/views");
    define('CTRLS_DIR', __DIR__ . "/App/controllers");

    // Router setup
    $router = new Router();
    $router->setRoute('/', 'home');
    $router->setRoute('/add-products', 'add-products');
    $router->setRoute('/product-list', 'list-products');        
    $router->loadView($_SERVER["REQUEST_URI"]);
