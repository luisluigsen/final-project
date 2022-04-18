<?php

    class Utils {

        public static function deleteSession($name)
        {   if(isset($_SESSION[$name]))
            {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
            }
            return $name;
        }

        public static function isAdmin()
        {
            if(!isset ($_SESSION['admin']))
            {
                header("Location:".base_url);
            }
            else
            {
                return true;
            }
        }
        
        public static function identified()
        {
            if(!isset ($_SESSION['identity']))
            {
                header("Location:".base_url);
            }
            else
            {
                return true;
            }
        }
        
        public static function showCategories()
        {
            require_once "models/CategoyModel.php";
            $category = new CategoryModel();
            $categories=$category->getAll();
            return $categories;
        }

        public static function statsCart()
        {
            $stats = array(
                'count'=> 0,
                'total'=> 0);
            
            if(isset($_SESSION['cart']))
            {
                $stats['count'] = count($_SESSION['cart']);

                foreach($_SESSION['cart'] as  $product)
                {
                    $stats['total'] += $product['price']*$product['unit'];
                }
            }
            return $stats;    
        }

        public static function showStatus($status)
        {   
            $value = 'outstanding';
            if($status == 'confirm')
            {
                $value = 'outstanding';
            }elseif($status == 'preparation')
            {
                $value = 'In preparation';
            }elseif($status == 'ready')
            {
                $value = 'ready to send';
            }elseif($status == 'sended')
            {
                $value = 'sended';
            }
            return $value;
        }
    }