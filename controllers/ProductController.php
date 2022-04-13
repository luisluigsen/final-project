<?php
require_once "models/ProdcutModel.php";

class ProductController
{

    public function index()
    {
        $product=new ProductModel();
        $products=$product->getRandom(6);
        require_once "views/products/freatures.php";
    }

    public function look()
    {
        if (isset($_GET)) {

            $id = $_GET['id'];

            $product = new ProductModel();
            $product->setId($id);
            
            $product = $product->getOne();
        } 
        require_once 'views/products/look.php';
        
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
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $description = isset($_POST['description']) ? $_POST['description'] : false;
            $price = isset($_POST['price']) ? $_POST['price'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $category = isset($_POST['category']) ? $_POST['category'] : false;
            // $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

            if ($name && $description && $price && $stock && $category) {
                $product = new ProductModel();
                $product->setName($name);
                $product->setDescription($description);
                $product->setPrice($price);
                $product->setStock($stock);
                $product->setCategory_id($category);

                if (isset($_FILES['image'])) {
                    $file = $_FILES['image'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];

                    if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/svg" || $mimetype == "image/gif") {
                        if (!is_dir('uploads/images')) {
                            mkdir('uploads/images', 0777, true);
                        }

                        $product->setImage($filename);
                        move_uploaded_file($file['tmp_name'], 'uploads/images' . $filename);
                    }
                }

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $product->setId($id);
                    $save = $product->edit();
                } else {
                    $save = $product->save();
                }

                if ($save) {
                    $_SESSION['product'] = 'complete';
                } else {
                    $_SESSION['product'] = 'failed';
                }
            } else {
                $_SESSION['product'] = 'failed';
            }
        } else {
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
            
            $pro = $product->getOne();
            require_once 'views/products/create.php';
        } else {
            header("Location:" . base_url . "Product/manage");
        }
    }
}
