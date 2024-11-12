<?php
include_once 'database.php';

class CategoryDAL
{
    private $database;

    public function __construct()
    {
        $this->database = (new Database())->getConnection();
    }

    public function createCategory($catName)
    {
        $q = "INSERT INTO category(category) VALUES('$catName')";
        return $this->database->query($q);
    }

    public function getCategoryList()
    {
        $q = "SELECT * FROM category";
        return $this->database->query($q);
    }

    public function updateCategory($id, $catName)
    {
        $q = "UPDATE category SET category = '$catName' WHERE id = $id";
        return $this->database->query($q);
    }

    public function deleteCategory($id)
    {
        $q = "DELETE FROM category WHERE id = $id";
        return $this->database->query($q);
    }
}
