<?php

require_once "models/ProdcutModel.php";
class ProductController
{

    public function index()
    {

        require_once "views/products/freatures.php";
    }

    public function manage()
    {
        Utils::isAdmin();
        $product = new ProductModel();
        $products = $product->getAll();

        require_once "views/products/manage.php";
    }

    public function create()
    {
        Utils::isAdmin();
        require_once "views/products/create.php";
    }

    public function save()
    {
        Utils::isAdmin();
        if(isset($_POST))
        {
            var_dump($_POST);
         
        }
    }
}
