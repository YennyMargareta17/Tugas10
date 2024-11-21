<?php
require_once 'app/core/Model.php';

class Book extends Model
{
    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($title, $author)
    {
        $stmt = $this->db->prepare("INSERT INTO books (title, author) VALUES (:title, :author)");
        $stmt->execute(['title' => $title, 'author' => $author]);
    }
}
