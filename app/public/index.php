<?php
require_once('./SwitchRouter.php');
$uri = trim($_SERVER['REQUEST_URI'], '/');
/*
 * Works well with anything, but not with e.g. about/a
 */
$router = new SwitchRouter();
$router->route($uri);
