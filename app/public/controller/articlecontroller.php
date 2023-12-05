<?php

require_once __DIR__ . '/../service/ArticleService.php';

class articlecontroller
{

    private ArticleService $service;

    public function __construct()
    {
        $this->service = new ArticleService();
    }

    public function index()
    {

        $articles = $this->service->getAll();
        include_once('views/articles.php');
    }
}