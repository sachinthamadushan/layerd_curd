<?php

include_once '../data/categoryDAL.php';

class CategoryBLL
{
    private $categoryDAL;

    public function __construct(){
        $this->categoryDAL = new CategoryDAL();
    }

    public function createCategory($catName){
        return $this->categoryDAL->createCategory($catName);
    }

    public function getCategoryList(){
        return $this->categoryDAL->getCategoryList();
    }

    public function updateCategory($id, $catName){
        return $this->categoryDAL->updateCategory($id, $catName);
    }

    public function deleteCategory($id){
        return $this->categoryDAL->deleteCategory($id);
    }
}