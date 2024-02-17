<?php

namespace App;

use MF\Init\Bootstrap;

Class Route extends Bootstrap {    

    protected function initRoutes() {

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $routes['loja'] = array(
            'route' => '/loja',
            'controller' => 'indexController',
            'action' => 'loja'
        );

        $this->setRoutes($routes);
    }
    
}