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

    private string $all_articles_sql = "SELECT * FROM articles";
    private string $create_article_sql = "insert into articles (id, name, price) values (null, :name, :price)";
    private string $delete_article_sql = "delete from articles where id = :id";

    public function findAll()
    {
        $stmt = $this->db->prepare("select * from articles");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function saveOne($data)
    {
        $stmt = $this->db->prepare($this->create_article_sql);
        return $stmt->execute($data) ?? false;
    }

    public function deleteOne($id)
    {
        $stmt = $this->db->prepare($this->delete_article_sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}