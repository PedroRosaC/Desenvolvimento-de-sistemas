<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_js_bootstrap.bundle.min.js" type="text/javascript"></script>
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
</html>
