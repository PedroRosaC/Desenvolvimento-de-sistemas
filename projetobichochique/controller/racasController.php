<?php
require_once './model/racasModel.php';

if($_POST){
    //inserir algo na bd (cadastrar)
    $raca= new racasModel();
    $raca->setNome($POST['$nome']);
    $raca->setDescricao($POST['$descricao']);
    $raca->setFaixaPeso($POST['$faixaPeso']);
    $raca->setFaixaPreco($POST['$faixaPreco']);
    $raca->Insert();
}else if($total == 1){
    header('location:cadasrarRacasPage.php?cod=success');
    //editar algo na bd ou excluir algo
}else{
    header('location:cadasrarRacasPage.php?cod=error');
    loadAll();
}

function loadAll(){
    //Crio um objeto do tipo raças
    $racas = new racasModel();
    $racasList = $racas->loadAll();
    return $racasList;
}
function loadByid($id){
    //Crio um objeto do tipo raças
    $racas = new racasModel();
    $racas ->loadByid($id);
    return $racas;
}
