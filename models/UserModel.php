<?php


class UserModel
{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $role;
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

    public function getName()
    {
        return $this->name;
    }
  
    public function getSurname()
    {
        return $this->surname;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
    }

    public function setSurname($surname)
    {
        $this->surname = $this->db->real_escape_string($surname);
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setRole($role)
    {
        $this->role = $role;

    }

    public function setImage($image)
    {
        $this->image = $image;

    }

    public function nameValidate()
    {
        return !empty($this->name)&& !is_numeric($this->name)&& !preg_match('/[0-9]/', $this->name);

     
    }

    public function lastNameValidate()
    {
        return !empty($this->surname)&& !is_numeric($this->surname)&& !preg_match('/[0-9]/', $this->surname);
     
    }



    public function save()
    {
        $sql =  "INSERT INTO users VALUES (NULL ,'{$this->getName()}','{$this->getSurname()}', '{$this->getEmail()}','{$this->getPassword()}','user', null);";
        $save = $this->db->query($sql);

        $result = false;

        if ($save) {
            $result = true;
        }
        return $result;
    }

    
}
