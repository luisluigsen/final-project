<?php

require_once 'models/CategoyModel.php';

class CategoryController {

    public function index(){
        Utils::isAdmin();
        $category = new CategoryModel;
        $categories = $category->getAll();
        require_once 'views/categories/index.php';
    }

    public function create()
    {
        Utils::isAdmin();
        require_once "views/categories/create.php";
    }

    public function save()
    {
        Utils::isAdmin();

        header("Location:".base_url."Category/index");
    }
}