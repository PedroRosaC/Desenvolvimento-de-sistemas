<?php

if ($_POST) {
    require_once '../model/usuarioModel.php';
    $usuario = new usuarioModel();
    $usuario->setEmail($_POST['email']);    
    $usuario->setSenha($_POST['senha']);
    if(!empty($_POST['email'])&&!empty($_POST['senha'])){
        $total = $usuario->Insert();
        
        header('location:../index.php?cod=173');
        
    } else {
        header('location:../registrar.php?cod=171');
    }
} else {
    header('location:../registrar.php?cod=172');
}

