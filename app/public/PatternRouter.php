<?php

class PatternRouter
{
    public function route($uri)
    {
        // Set default controller and default method
        $defaultController = 'home';
        $defaultMethod = 'index';


        // read controller/method names from the URL
        $path = explode('/', $uri);

        if (!isset($path[0]) || empty($path[0])) {
            $path[0] = $defaultController;
        }
        $controllerName = $path[0] . 'controller';

        if (!isset($path[1]) || empty($path['1'])) {
            $path[1] = $defaultMethod;
        }
        $methodName = $path[1];

        // Dynamically invoke relevant controller method
        try {
            require __DIR__ . '/controller/' . $controllerName . '.php';
            $controllerObject = new $controllerName;
            $controllerObject->{$methodName}();

        } catch (Exception $e) {
            http_response_code(404);
            die('404 not found');
        }
    }
}