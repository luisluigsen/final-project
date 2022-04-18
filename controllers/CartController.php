<?php
require_once 'models/ProdcutModel.php';
class CartController
{

    public function index()
    {
        if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>=1)
        {
            $cart = $_SESSION['cart'];
        }
        else
        {
            $cart = array();
        } 
        require_once "views/cart/index.php";
    }
    
    public function add()
    {
        if(isset($_GET['id']))
        {
            $product_id= $_GET['id'];
        }else{
            header('Location:'.base_url);
        }
        
        if(isset($_SESSION['cart'])){

            foreach($_SESSION['cart'] as $index => $element){
                $counter=0;
                if($element['id_product']==$product_id){
                    $_SESSION['cart'][$index]['unit']++;
                    $counter++;
                }
            }
        }
            if(!isset($counter) || ($counter == 0)){

                $product = new ProductModel();
                $product->setId($product_id);
                $product=$product->getOne();

                    if(is_object($product))
                    {
                        $_SESSION['cart'][]=array(
                            "id_product"=>$product->id,
                            "price"     =>$product->price,
                            "unit"      => 1,
                            "product"   => $product );
                    }
            }
        
        header('Location:'.base_url.'Cart/index');
    }

    public function delete()
    {
        if(isset($_GET['index']))
        {
            $index=$_GET['index'];
            unset($_SESSION['cart'][$index]);
        }
        header('Location:'.base_url.'Cart/index');
    }

    public function deleteAll()
    {
        unset($_SESSION['cart']);
        header('Location:'.base_url.'Cart/index');
    }

    public function plus()
    {
        if(isset($_GET['index']))
        {
            $index=$_GET['index'];
            $_SESSION['cart'][$index]['unit']++;
        }
        header('Location:'.base_url.'Cart/index');
    }

    public function minus()
    {
        if(isset($_GET['index']))
        {
            $index=$_GET['index'];
            $_SESSION['cart'][$index]['unit']--;

            if($_SESSION['cart'][$index]['unit']==0)
            {
                unset($_SESSION['cart'][$index]);
            }
        }
        header('Location:'.base_url.'Cart/index');
    }


}