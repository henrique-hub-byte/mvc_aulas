<?php

namespace MF\Init;

/* class abstrata não pode ser instanciada, apenas  herdada */

abstract class Bootstrap
{
    private $routes;

    abstract protected function initRoutes();

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function run($url)
    {
        /* echo '*******' . $url . '*******'; */
        foreach ($this->getRoutes() as $key => $route) {
            if ($url == $route['route']) {
                $class = "App\\Controller\\" . $route['controller'];
                $controller = new $class();

                $action = $route['action'];

                $controller->$action();
            }
        }
    }

    /*  pegar o parametro usado na url*/
    protected function getUrl()
    {
        /* capturando o respectivo path */
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
