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

    public function deleteArticle($id)
    {
        return $this->service->deleteArticle($id);
    }

    public function breakdown($path)
    {
        var_dump($path);
    }
}