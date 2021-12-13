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
        $this->stmt = $this->db->prepare($this->all_articles_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $this->stmt->execute();
        return $this->stmt->fetchAll();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function saveOne($data)
    {
        $this->stmt = $this->db->prepare($this->create_article_sql);
        return $this->stmt->execute($data) ?? false;
    }

    public function deleteOne($id)
    {
        $this->stmt = $this->db->prepare($this->delete_article_sql);
        $this->stmt->bindParam(':id', $id);
        return $this->stmt->execute();
    }
}