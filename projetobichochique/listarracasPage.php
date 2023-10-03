<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <body>
        <table id="racasTable" class="table table-bordered">
            <thead>
            <th>Nome</th>
            <th>Faixa de peso</th>
            <th>Faixa de preço</th>
            <th>Operações</th>
        </thead>
        <tbody>
            <?php
            require_once './controller/racasController.php';
            $racasList = loadAll();
            //Exibir resultado
            foreach ($racasList as $raca) {
                echo '<tr>';
                    echo '<td>';
                        echo $raca['nome'];
                    echo '</td>';
                    echo '<td>';
                        echo $raca['faixa_peso'];
                    echo '</td>';
                    echo '<td>';
                        echo $raca['faixa_preco'];
                    echo '</td>';
                     echo '<td>';
                        echo '<a class="btn btn-success" href="cadastrarRacasPage.php?cod=edit&&id='.$raca['id'].'"> Editar </a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="cadastrarRacasPage.php?cod=erase"> Excluir </a>';
                    echo '</td>';
                echo '</tr>';
            }
            $racas= loadByid(5);
            echo $racas->getNome();
            echo '<hr>';
            $racas->setNome('Brasil');
            echo $racas->getNome();
            
            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('#racasTable').DataTable({
              
        });
    </script>
</body>
</html>
