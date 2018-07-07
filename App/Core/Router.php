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
            'controller' => CTRLS_DIR . "/$ctrlName.php"
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
            require_once $this->routes[$uri]['controller'];
            require_once $this->routes[$uri]['view'];
        else :
            require_once $this->routes['/not-found']['controller'];
            require_once  $this->routes['/not-found']['view'];
        endif;
    }
}
