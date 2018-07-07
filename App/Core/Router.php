<?php
namespace App\Core;

/**
 * Class Router
 * @package core\Router
 */
class Router {
    private $routes = [];

    public function __construct()
    {
        $this->setRoute('/not-found', '/not-found');
    }

    /**
     * Set a route
     * @param string $uri
     * @param string $view
     */
    public function setRoute(string $uri, string $view)
    {
        $parts = explode('-', $view);
        $ctrlName = "";
        foreach ($parts as $part) :
            $ctrlName .= ucfirst($part);
        endforeach;
        $ctrlName .= 'Controller';
        $this->routes[$uri] = [
            'view' => VIEWS_DIR . "/$view.phtml",
            'controller' => $ctrlName
        ];
    }

    /**
     * Get a view from uri given
     * @param string $uri
     * @return string
     */
    public function loadView(string $uri)
    {
        if(isset($this->routes[$uri])) :
            $ctrlName = "\App\controllers\\" . $this->routes[$uri]['controller'];
            $controller = new $ctrlName();
            require_once $this->routes[$uri]['view'];
        else :
            $ctrlName = "\App\controllers\\" . $this->routes['/not-found']['controller'];
            $controller = new $ctrlName();
            require_once  $this->routes['/not-found']['view'];
        endif;
    }
}
