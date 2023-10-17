<?php

    $server = '127.0.0.1'; //Endereço do servidor
    $user = 'root'; //Usuario que acessa o banco
    $pass = 'pedropedro01'; //Senha do usuário
    $dataBase = 'netflix'; //Nome da base de dados

    $conexao = new mysqli($server, $user, $pass, $dataBase);

    if($conexao->errno){
        echo 'Erro';

    }

    else{
        echo 'certo';
    }