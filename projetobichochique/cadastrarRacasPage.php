<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    </head>
    <body>
        <form method="POST" action="controller/racasController.php">
            <?php 
                if($_REQUEST){
                    $cod= $_REQUEST['cod'];
                    if($cod == "success"){
                        echo '<div class="alert alert-success">'
                        . 'Registro inserido com sucesso'
                        . '</div>';
                    }else if($cod == 'error'){
                         echo '<div class="alert alert-danger">Erro</div>';
                    }else if($cod == 'edit'){
                        require_once './controller/racasController.php';
                        $id = $_REQUEST['id'];
                        $racasObject = loadByid($id);
                    }else if($cod == 'erase'){
                         echo '<div class="alert alert-warning">'
                        . 'Item excluído!'
                        . '</div>';
                    }
                        
                }
            ?>
            <div class="container">
                <div class="form-group"> 
                    <h1>Cadastro de racas</h1>
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" value="<?php echo @(isset($racasObject)? $racasObject->getNome():'') ?>" placeholder="Nome da Raça " name="nome">
                </div>
                <br>
                <div class="form-group">
                  <label for="descricao" class="form-label">Descrição: </label>
                  <input type="text" class="form-control" id="descricao" value="<?php echo @(isset($racasObject)? $racasObject->getDescricao():'') ?>"placeholder="Descreva a raça" name="descricao">
                </div>
                <br>
                <div class="form-group">
                    <label for="faixapreco" class="form-label">Faixa de preço:</label>
                    <input type="text" class="form-control" id="faixapreco"value="<?php echo @(isset($racasObject)? $racasObject->getFaixaPreco():'') ?>" placeholder="Faixa de preço" name="faixapreco">
                </div>
                <br>
                <div class="form-group">
                  <label for="faixapeso" class="form-label">Faixa de peso: </label>
                  <input type="text" class="form-control" id="faixapeso" value="<?php echo @(isset($racasObject)? $racasObject->getFaixaPeso():'') ?>" placeholder="Faixa de peso" name="faixapeso">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
          </div>
        
        </form>
    </body>
</html>
