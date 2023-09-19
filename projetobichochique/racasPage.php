<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <body class="container">
        <table class="table table-bordered">
            <thead>
            <th>Nome</th>
            <th>Faixa de peso</th>
            <th>Faixa de preço</th>
            </thead>
            <tbody>
                <?php
                require_once './controller/racasController.php';

                $resultlist = carregarDados();
                foreach($resultlist as $raca){
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
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
    <script>
        $(document).ready(function (){
           $('#racasTable').DataTable({
               
           }); 
        });
    </script>
</html>
