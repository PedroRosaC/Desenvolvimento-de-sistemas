<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        require_once '.model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM racas';
        $result = $db->Consultar($sql);
        foreach($result as $data){
            echo '<p>'.$data['nome'].'</p>';
        }
        $db->Desconectar();
        ?>
    </body>
</html>
