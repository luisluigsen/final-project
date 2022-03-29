<?php
require_once "models/UserModel.php";

class UserController
{

    public function index()
    {
        echo "controlador de usuarios action index";
    }
    public function register()
    {

        require_once "views/User/register.php";
        if (isset($_POST)) {
            var_dump($_POST);
        }
    }
    public function save()
    {

        if (isset($_POST)) {
            $user = new UserModel();
            $user->setName($_POST['name']);
            $user->setSurname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);

            $save = $user->save();
            if($save){
                $_SESSION['register'] = "complete";
            }
            else
            {
                $_SESSION['register'] = "failed";

            }

        }
    }
}
