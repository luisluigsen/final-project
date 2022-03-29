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
     * Get the value of surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set the value of surname
     *
     * @return  self
     */
    public function setSurname($surname)
    {
        $this->surname = $this->db->real_escape_string($surname);
    }


    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }



    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }


    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
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
