<?php

require_once('service/ArticleService.php');

class articlecontroller
{

    private ArticleService $service;

    public function __construct()
    {
        $this->service = new ArticleService();
    }

    public function index()
    {
        $articles = $this->service->getAllArticles();
        echo json_encode($articles);
    }

    public function createArticle($vars)
    {
        $name = $vars["name"];
        $price = $vars["price"];
        return $this->service->createArticle($name, $price);
    }
}