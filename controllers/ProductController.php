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

            $product = new ProductModel();
            $product->setName($_POST['name']);
            $product->setDescription($_POST['description']);
            $product->setPrice($_POST['price']);
            $product->setStock($_POST['stock']);
            $product->setCategory_id($_POST['category']);

            if (isset($_FILES['image'])) {
                $file = $_FILES['image'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/svg" || $mimetype == "image/gif") {
                    if (!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }

                    $product->setImage($_FILES['image']);
                    move_uploaded_file($file['tmp_name'], 'uploads/images' . $filename);
                }
            }

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

    public function delete()
    {
        Utils::isAdmin();
        if (isset($_GET)) {
            $id = $_GET['id'];
            $product = new ProductModel();
            $product->setId($id);
            $delete = $product->delete();

            if ($delete) {
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }
        } else {
            $_SESSION['delete'] = 'failed';
        }
        header("Location:" . base_url . "Product/manage");
    }

    public function edit()
    {
        if (isset($_GET)) {

            $id = $_GET['id'];
            $edit = true;
            
            $product = new ProductModel();
            $product->setId($id);
            $pro=$product->getOne();
            require_once 'views/products/create.php';
        }else{
            header("Location:".base_url."Product/manage");
        }
    }
}
