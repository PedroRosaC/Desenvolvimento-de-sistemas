<?php

if ($_POST) {
    //print_r($_GET);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dados = array('email'=>'b@b','senha'=>'pedro');
    //executar a consulta
    if ($email == $dados['email'] && $senha == $dados['senha']) {
        session_start();
        //Criei a sessão "login"
        $_SESSION['login'] = $email;
        header('location: ../home.php');
    } else {
        //Login inválido 
        header('location:../index.php?cod=172');
    }
} else {
    //redireciona para a index
    header('location:../index.php');
}
?>


