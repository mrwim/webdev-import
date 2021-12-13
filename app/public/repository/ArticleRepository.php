<?php

require_once('../db.php');
require_once('Repository.php');
require_once('model/Article.php');

class ArticleRepository extends Repository
{

    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $all_articles = "SELECT * FROM articles";

    public function findAll() {
        $stmt = $this->db->prepare("select * from articles");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function saveOne($object)
    {
        // TODO: Implement saveOne() method.
    }
}