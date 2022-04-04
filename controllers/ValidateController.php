<?php


class ValidateController
{   
    public $name;
    public $lastname;
    public $password;
    public $email;

    public function __construct($name,$lastname,$password,$email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email= $email;
    }

   
    public function getName()
    {
        return $this->name;
    }

 
    public function getLastname()
    {
        return $this->lastname;
    }


    public function getPassword()
    {
        return $this->password;
    }

 
    public function getEmail()
    {
        return $this->email;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

    }


    public function setPassword($password)
    {
        $this->password = $password;

    }

 
    public function setEmail($email)
    {
        $this->email = $email;

    }

    function nameValidate()
    {
        return !is_numeric($this->name)&& !empty($this->name) && !preg_match("/[0-9]/ " , $this->name);
    }

    function lastNameValidate()
    {
        return !is_numeric($this->lastname)&& !empty($this->lastname) && !preg_match("/[0-9]/ " , $this->lastname);
    }

    function emailValidate()
    {
        return !empty($this->email)&&filter_var($this->email , FILTER_VALIDATE_EMAIL);
    }

    function passwordValidate()
    {
        return strlen($this->password)>6&&strlen($this->password)<16&& preg_match('`[A-Z]`',$this->password)&& preg_match('`[a-z]`', $this->password)&& preg_match('`[0-9]`', $this->password);
    }
}


