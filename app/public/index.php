<?php
require_once('./SwitchRouter.php');
$uri = trim($_SERVER['REQUEST_URI'], '/');
$method = $_SERVER['REQUEST_METHOD'];
/*
 * Works well with anything, but not with e.g. about/a
 */
$router = new SwitchRouter();
$router->route($uri,
    $method,
    strcasecmp($method, 'post') == 0
        ? file_get_contents('php://input')
        : null);
