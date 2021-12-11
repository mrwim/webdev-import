<?php
require_once('../db.php');
require_once('model/Article.php');

class ArticleService
{

    private DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("select * from articles");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function createArticle($name, $price)
    {
        $data = [
            'name' => $name,
            'price' => $price
        ];
        $sql = "insert into articles (id, name, price) values (null, :name, :price)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data) ?? false;

    }
}