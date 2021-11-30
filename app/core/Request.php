<?php

namespace core;

class Request
{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?') ?? false;
        if ($position === false) {
            return $path;
        }

        return $path = substr($path, 0, $position);

    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}