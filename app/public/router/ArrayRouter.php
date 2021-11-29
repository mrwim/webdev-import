<?php

class ArrayRouter
{

    public function route($uri)
    {
        $routes = array(
            '' => array(
                'controller' => 'homecontroller',
                'method' => 'index'
            ),
            'about' => array(
                'controller' => 'homecontroller',
                'method' => 'about'
            ),
        );
        /* Result:
         array(2) {
         [""]=> array(2) { ["controller"]=> string(14) "homecontroller"
                           ["method"]=> string(5) "index" }
         ["about"]=> array(2) { ["controller"]=> string(14) "homecontroller"
                                ["method"]=> string(5)"about" }
        }
        */

        // Deal with undefined paths first

        if (!(isset($routes[$uri]['controller']) || isset($routes[$uri]['method']))) {
            http_response_code(404);
            die('404 Not found');
        }

        $controller = $routes[$uri]['controller'];
        $method = $routes[$uri]['method'];

        require __DIR__ . '/../controller/' . $controller . '.php';
        $controllerObject = new $controller;
        $controllerObject->{$method}();

    }
}