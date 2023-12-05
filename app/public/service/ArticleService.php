<?php
require_once '../db.php';
require_once 'model/Article.php';

class ArticleService
{

    private DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getAll()
    {

        $stmt = $this->db->prepare("select * from article");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $stmt->execute();

        $articles = $stmt->fetchAll();
        return $articles;
    }
}