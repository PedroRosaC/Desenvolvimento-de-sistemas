<?php
if($_POST){
    require_once "../model/perfilModel.php";
    $perfil = new perfilModel($usuario_id);
    $perfil->setNome($_POST['nome']);
    $perfil->setTipo($_POST['kids_ou_nao']);
    if(!empty($_POST['nome'])){
        $total = $perfil->Insert();
        header('location:../home.php');
         
    } else {
        header('location:../criarPerfil.php?cod=171');
    }
} else {
    header('location:../criarPerfil.php?cod=172');
}

