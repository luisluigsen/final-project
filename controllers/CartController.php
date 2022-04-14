<?php
require_once 'models/ProdcutModel.php';
class CartController
{

    public function index()
    {
        $cart = $_SESSION['cart'];
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

    public function remove()
    {
        
    }

    public function delete_all()
    {
        unset($_SESSION['cart']);
        header('Location:'.base_url.'Cart/index');
    }
}