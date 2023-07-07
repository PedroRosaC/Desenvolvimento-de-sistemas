<?php
//se vier qualquer coisa de get , entra aqui po
    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if($email == 'a@a' && $senha=='asasas'){
            //login ok
            session_start();
            $_SESSION['login'] = $email;
            header("location:../home.php");
        }else{
            //login invalido
            header("location:../index.php?error=171");
        }
    }else{
        header("location:../index.php");
    }
?>