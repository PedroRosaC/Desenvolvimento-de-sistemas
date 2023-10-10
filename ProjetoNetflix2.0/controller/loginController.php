<?php

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $lembrar = $_POST['lembrar'];
    $dados = array('email'=>'b@b','senha'=>'pedro');
    //executar a consulta
    if ($email == $dados['email'] && $senha == $dados['senha']) {
        session_start();
        
        $_SESSION['login'] = $email;
        //print_r($_POST);
        if(isset($lembrar)){
            if($lembrar == 1){
                //echo 'foi';
                setcookie('email', $email, time() + (86400 * 30), "/");
            }
        }
        
        
        header('location:../home.php');
        
    } else {
        header('location:../index.php?cod=171');
    }
} else {
    header('location:../index.php');
}
?>
