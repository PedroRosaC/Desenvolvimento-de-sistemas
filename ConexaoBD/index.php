<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::LOGIN::.</title>
    </head>
    <body>
        <?php
        $enderecoServidor = 'localhost';
        $usuario = 'root';
        $senha = 'pedropedro01';
        $bancoDados ='bichochique';
        // dados "obrigatórios"
        
        $mysqli = new mysqli($enderecoServidor, $usuario,$senha,$bancoDados);
        
        if(mysqli_connect_errno()){
            echo 'Erro de conexao '. mysqli_connect_error();
            exit();
        }else{
            //echo 'Conexão realizada com sucesso!!!';
            $sql = 'SELECT * FROM racas';
            $result = $mysqli -> query($sql);
        }
        if($result = $mysqli ->query($sql)){
            foreach($result as $indice => $dados){
                echo '<p>'.$dados['nome'].'</p>';
            }
        } else {
            echo $mysqli->error;
            exit();
            
}
        
        $mysqli->close();
        // put your code here
        ?>
    </body>
</html>
