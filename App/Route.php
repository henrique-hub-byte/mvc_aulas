<?php
    /* dado um namespace a classe Route */
    namespace App;

    class Route {
        public function initRoutes(){

            /* array */
            $routes['home'] = [
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'];

            $routes['sobre_nos'] = [
                'route' => '/sobre-nos',
                'controller' => 'indexController',
                'action' => 'SOBREnOS'
            ];

        }

        /*  */
        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }

?>