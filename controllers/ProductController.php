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
        if (isset($_POST)) {
         
            // $image          = isset($_POST['image']) ? isset($_POST['image']):false;

            
            
                $product = new ProductModel();
                $product->setName($_POST['name']);
                $product->setDescription($_POST['description']);
                $product->setPrice($_POST['price']);
                $product->setStock($_POST['stock']);
                $product->setCategory_id($_POST['category']);
                $save = $product->save();


                if ($save) {
                    $_SESSION['product'] = 'complete';
                } else {
                    $_SESSION['product'] = 'failed';
                }
            } else {
                $_SESSION['product'] = 'failed';
            
            $_SESSION['product'] = 'failed';
        }
        header("Location:" . base_url . "Product/manage");
    }
}
