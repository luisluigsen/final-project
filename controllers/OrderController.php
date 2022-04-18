<?php

require_once "models/OrderModel.php";
class OrderController {

    public function make(){
        require_once 'views/orders/make.php';
    }

    public function add(){
        
        if(isset($_SESSION['identity']))
        {
            $user_id = $_SESSION['identity']->id;
            $province = isset($_POST['province']) ? $_POST['province'] : false;
            $city = isset($_POST['city']) ? $_POST['city'] : false;
            $adress = isset($_POST['adress']) ? $_POST['adress'] : false;

            $stats= Utils::statsCart();
            $cost= $stats['total'];

            if($province&&$city&&$adress)
            {
                $order = new OrderModel();
                $order->setUser_id($user_id);
                $order->setProvince($province);
                $order->setCity($city);
                $order->setAdress($adress);
                $order->setCost($cost);

                $save=$order->save();

                $save_line=$order->save_line();

                if($save && $save_line)
                {
                    $_SESSION['order']='complete';
                }
                else
                {
                    $_SESSION['order']='failed';

                }
            }else{
                $_SESSION['order']='failed';
            }
            header("Location:".base_url.'Order/confirm');

        }
        else
        {
            header("Location:".base_url);
        }
    }

    public function confirm()
    {
        if(isset($_SESSION['identity']))
        {
            $identity=$_SESSION['identity'];
            $order= new OrderModel();
            $order->setUser_id($identity->id);
            $order = $order->getOneByUser();

            $order_product = new OrderModel();
            $products=$order_product->getProductsByOrder($order->id);
        }
        require_once "views/orders/confirm.php";
    }

    public function my_orders()
    {
        Utils::identified();
        $user_id = $_SESSION['identity']->id;
        $order = new OrderModel();
        $order->setUser_id($user_id);
        $orders=$order->getAllByUser();

        require_once 'views/orders/my_orders.php';
    }

    public function detail()
    {
        Utils::identified();

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $order= new OrderModel();
            $order->setId($id);
            $order = $order->getOne();

            $order_product = new OrderModel();
            $products=$order_product->getProductsByOrder($id);

            require_once 'views/orders/details.php';

        }else
        {
            header("Location:".base_url.'Order/my_orders');
        }

    }

    public function manage()
    {
        Utils::isAdmin();
        $manage=true;

        $order=new OrderModel();
        $orders=$order->getAll();

        require_once 'views/orders/my_orders.php';
    }

    public function status()
    {
        if(isset($_POST['order_id'])&& isset($_POST['status']))
        {
            //capture data form
            $status= $_POST['status'];
            $id = $_POST['order_id'];

            // update order
            $order = new OrderModel();
            $order->setId($id);
            $order->setStatus($status);
            $order->updateOne();

            header("Location:".base_url.'Order/detail&id='.$id);
        }else
        {
            header("Location:".base_url);
        }
    }
}