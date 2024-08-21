<?php

namespace Controller;

use Model\UserModel;

require "./vendor/autoload.php";

class UserController{

    //método construtor
    public function __construct()
    {

    }

    public function login(){
        if($_POST){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = new UserModel;
            $usuario = $usuario->login($email,$senha);
            if ($usuario->total > 0) {
                @session_start();
                $_SESSION['id'] = $usuario->getId();
                $_SESSION['nome'] = $usuario->getNome();
                header("location:./home.php?cod=success");
            }else{
                header("location:./home.php?cod=error");
            }
        }
        
    }
}