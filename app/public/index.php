<?php

require_once('router/ArrayRouter.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = new ArrayRouter();
$router->route($uri);
