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
        require_once "views/orders/confirm.php";
    }
}