<?php

require_once 'models/CategoyModel.php';

class CategoryController
{

    public function index()
    {
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
        if (isset($_POST) && isset($_POST['name'])) {

            $category = new CategoryModel();
            $category->setName($_POST['name']);
            $category->save();
        }
        header("Location:" . base_url . "Category/index");
    }



    public function delete()
    {
        Utils::isAdmin();

        if (isset($_GET)) {

            $id = $_GET['id'];
            $category = new CategoryModel();
            $category->setId($id);
            $delete = $category->delete();

            if ($delete) {
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }
            $_SESSION['delete'] = 'failed';
        } else {
            $_SESSION['delete'] = 'failed';
        }

        header("Location:" . base_url . "Category/index");
    }

    public function edit()
    {
        Utils::isAdmin();
        if (isset($_GET)) {
            
            $id= $_GET['id'];
            $edit = true;

            $category = new CategoryModel();
            $category->setId($id);

            $cat = $category->getOne();
            
            require_once "views/categories/create.php";
        } else {
            header("Location:" . base_url . "Category/index");
        }
    }
}
