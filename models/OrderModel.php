<?php

class OrderModel
{
    private $id;
    private $user_id;
    private $province;
    private $city;
    private $adress;
    private $cost;
    private $status;
    private $date;
    private $hour;

    private $db;

   
    public function __construct()
    {
        $this->db = DataBase::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getHour()
    {
        return $this->hour;
    }

    public function setId($id)
    {
        $this->id = $id;


    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;


    }


    public function setProvince($province)
    {
        $this->province = $this->db->real_escape_string($province);


    }

    public function setCity($city)
    {
        $this->city = $this->db->real_escape_string($city);

    }

    public function setAdress($adress)
    {
        $this->adress = $this->db->real_escape_string($adress);

    }


    public function setCost($cost)
    {
        $this->cost = $cost;


    }

  
    public function setStatus($status)
    {
        $this->status = $status;


    }

    public function setDate($date)
    {
        $this->date = $date;


    }

    public function setHour($hour)
    {
        $this->hour = $hour;

    }

    public function getAll()
    {
        $orders = $this->db->query("SELECT *FROM orders ORDER BY id DESC");
        return $orders;
    }


    public function getOne()
    {
        $orders = $this->db->query("SELECT *FROM orders WHERE id ={$this->getId()}");
        return $orders->fetch_object();
    }

    public function save()
    {
    
    
        $sql =  "INSERT INTO orders VALUES (NULL, {$this->getUser_id()},'{$this->getProvince()}','{$this->getCity()}', '{$this->getAdress()}',{$this->getCost()}, 'confirm' , CURDATE(), CURTIME());";
        $save = $this->db->query($sql);
    
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function save_line()
    {
        $sql = "SELECT LAST_INSERT_ID() as 'order';";
        $query = $this->db->query($sql);
        $order_id= $query->fetch_object()->order;

        foreach($_SESSION['cart'] as $element) {
            $product= $element['product'];

            $insert = "INSERT INTO orders_lines VALUES(NULL ,{$order_id},{$product->id},{$element['unit']})";
            $save=$this->db->query($insert);

            // var_dump($product);
            // var_dump($insert);
            // echo $this->db->error;
            // die();
        }
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;        
 
    }



}
