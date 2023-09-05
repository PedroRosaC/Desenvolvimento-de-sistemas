<?php
if($_POST){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $informacoes = array('email'=>'b@b', 'nome'=>'pedro');

    if ($email == $dados['email'] && $senha == $dados['senha']) {
        session_start();
        $_SESSION['login'] = $email;
        if(isset($lembrar)){
            if($lembrar == 1){
                setcookie('email', $email,time() + (86400 * 30), "/");
            }else{
                 if(isset($_COOKIE)){
                    setcookie("email", "", time() - (86400 * 30), "/");
                }
            }
        }
        header('location:../mainpage.php');
    }else {
        header('location:../index.php?cod=171');
    }
}else {
    header('location:../index.php');
}
?>