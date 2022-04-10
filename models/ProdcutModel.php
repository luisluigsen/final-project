<?php

class ProductModel
{
    private $id;
    private $category_id;
    private $name;
    private $description;
    private $price;
    private $stock;
    private $sale;
    private $date;
    private $image;

    private $db;

   
    public function __construct()
    {
        $this->db = DataBase::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCategory_id()
    {
        return $this->category_id;
    }

    public function getName()
    {
       
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getSale()
    {
        return $this->sale;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setId($id)
    {
        $this->id = $id;

    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);

    }

    public function setDescription($description)
    {
        $this->description = $this->db->real_escape_string($description);

    }

    public function setPrice($price)
    {
        $this->price = $this->db->real_escape_string($price);

    }

    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);

    }

    public function setSale($sale)
    {
        $this->sale = $this->db->real_escape_string($sale);

    }

    public function setDate($date)
    {
        $this->date = $date;


    }

    public function setImage($image)
    {
        $this->image = $image;

    }

    
    public function getAll()
    {
        $products = $this->db->query("SELECT *FROM products ORDER BY id DESC");
        return $products;
    }

    public function getOne()
    {
        $products = $this->db->query("SELECT *FROM products WHERE id ={$this->getId()}");
        return $products->fetch_object();
    }
    
    public function save()
    {
     
       
        $sql =  "INSERT INTO products VALUES (NULL, {$this->getCategory_id()},'{$this->getName()}','{$this->getDescription()}', {$this->getPrice()},{$this->getStock()}, null , CURDATE(), '{$this->getImage()}');";
        $save = $this->db->query($sql);
      
        $result = false;
    
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function delete()
    {
        $sql =  "DELETE FROM products WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;

        if ($delete) {
            $result = true;
        }
        return $result;
    }

    public function edit()
    {
     
       
        $sql =  "UPDATE products SET  name= '{$this->getName()}', description='{$this->getDescription()}', price={$this->getPrice()},stock={$this->getStock()},category_id = {$this->getCategory_id()}";
        
        if($this->getImage() != null){

            $sql.=",image='{$this->getImage()}'";
        }

        $sql .="WHERE id= {$this->id};";
        $save = $this->db->query($sql);
      
        $result = false;
    
        if ($save) {
            $result = true;
        }
        return $result;
    }
}

    
 


