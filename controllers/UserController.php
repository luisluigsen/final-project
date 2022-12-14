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
 
       
    }
    public function save()
    {
        if (isset($_POST)) {

            $name = isset($_POST['name'])? $_POST['name']:false ;
            $lastname =isset($_POST['lastname'])? $_POST['lastname']:false ;
            $email = isset($_POST['email'])? $_POST['email']:false ;
            $password = isset($_POST['password'])? $_POST['password']:false ;

            $user = new UserModel();
            $user->setName($name);
            $user->setSurname($lastname);
            $user->setEmail($email);
            $user->setPassword($password);
            $save = $user->save();

            if($save){
                $_SESSION['register'] = "complete";
            }
            else
            {
                $_SESSION['register'] = "failed";

            }

        }
        else
        {
            $_SESSION['register']= 'failed';
        }
        header("Location:" .base_url. 'User/register');
    }

    public function login()
    {
        if(isset($_POST))
        {
            $user = new UserModel;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $identity=$user->login();
            
            if($identity && is_object($identity))
            {
                $_SESSION['identity'] = $identity;
                
                if($identity->role == 'admin')
                {
                    $_SESSION['admin'] = true;
                }
            }else
            {
                $_SESSION['error_login']= 'Identify Failed!!';
            }
        }
        header("Location:".base_url);
    }

    public function logout()
    {
        if (isset($_SESSION['identity']))
        {
            unset($_SESSION['identity']);
        }
        if (isset($_SESSION['admin']))
        {
            unset($_SESSION['admin']);
        }
        header("Location:".base_url);
    }
}
