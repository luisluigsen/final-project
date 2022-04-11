<?php

class CategoryModel
{
    private $id;
    private $name;
    private $db;

    public function __construct()
    {
        $this->db = DataBase::connect();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name); 
    }

    
    public function getAll()
    {
        $categories = $this->db->query("SELECT *FROM categories ORDER BY id DESC;");
        return $categories;
    }

    public function getOne()
    {
        $categories = $this->db->query("SELECT *FROM categories WHERE id={$this->getId()}");
        return $categories->fetch_object( );
    }

    
    public function save()
    {
        $sql =  "INSERT INTO categories VALUES (NULL ,'{$this->getName()}');";
        $save = $this->db->query($sql);

        $result = false;

        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function delete()
    {
        $sql =  "DELETE FROM categories WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;

        if ($delete) {
            $result = true;
        }
        return $result;
    }

    public function edit()
    {
        $sql =  "UPDATE categories SET name ='{$this->getName()}' WHERE id={$this->getId()}";
        $save = $this->db->query($sql);


        $result = false;

        if ($save) {
            $result = true;
        }
        return $result;
    }
}
