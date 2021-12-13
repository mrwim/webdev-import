<?php
require_once 'model/Article.php';
require_once 'repository/ArticleRepository.php';

class ArticleService
{

    private ArticleRepository $articleRepository;

    public function __construct()     {
        $this->articleRepository = new ArticleRepository();
    }

    public function getAllArticles() {
        return $this->articleRepository->findAll();
    }

//    public function createArticle($name, $price)
//    {
//        $data = [
//            'name' => $name,
//            'price' => $price
//        ];
//        $sql = "insert into articles (id, name, price) values (null, :name, :price)";
//        $stmt = $this->db->prepare($sql);
//        $stmt->execute($data) ?? false;
//
//    }
}