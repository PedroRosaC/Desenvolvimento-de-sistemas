<?php



if ($_POST) {
    require_once '../model/racasModel.php';
    $raca = new racasModel();
    $raca->setNome($_POST['nome']);
    $raca->setDescricao($_POST['descricao']);
    $raca->setFaixaPreco($_POST['faixapreco']);
    $raca->setFaixaPeso($_POST['faixapeso']);
    $total = $raca->Insert();

    if ($total == 1) {
        header('location:../cadastrarRacasPage.php?cod=success');
        //editar algo na bd ou excluir algo
    } else {
        header('location:../cadastrarRacasPage.php?cod=error');
    }
}else if($_REQUEST){
    
}else{
    
    loadAll();
}

function loadAll() {
    require_once './model/racasModel.php';
    //Crio um objeto do tipo raças
    $racas = new racasModel();
    $racasList = $racas->loadAll();
    return $racasList;
}

function loadByid($id) {
    require_once './model/racasModel.php';
    //Crio um objeto do tipo raças
    $racas = new racasModel();
    $racas->loadByid($id);
    return $racas;
}
