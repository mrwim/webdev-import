<?php
require_once 'model/Article.php';
require_once 'repository/ArticleRepository.php';

class ArticleService
{

    private ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function getAllArticles()
    {
        return $this->articleRepository->findAll();
    }

    public function createArticle($name, $price)
    {
        $data = [
            'name' => $name,
            'price' => $price
        ];
        return $this->articleRepository->saveOne($data);
    }

    public function deleteArticle($id)
    {
        return $this->articleRepository->deleteOne($id);
    }

    public function getOneArticle($id)
    {
        return $this->articleRepository->findById($id);
    }
}