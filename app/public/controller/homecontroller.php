<?php

class HomeController
{
    public function index()
    {
        include __DIR__ . '/../view/index.php';
    }

    public function about()
    {
        include __DIR__ . '/../view/about.php';
    }
}
