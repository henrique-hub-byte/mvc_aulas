<?php
/* dado um namespace a classe Route */

namespace App;

/* posso utlizar o name dessa forma pois carreguei no arquivo autoload */
use MF\Init\Bootstrap;

class Route extends Bootstrap
{

    protected function initRoutes()
    {
        $routes['index'] = ['route' => '/', 'controller' => 'IndexController', 'action' => 'index'];
        $routes['sobre_nos'] = ['route' => '/sobre_nos', 'controller' => 'IndexController', 'action' => 'sobreNos'];

        /* recebendo os dados do array */
        $this->setRoutes($routes);

    }

}

?>