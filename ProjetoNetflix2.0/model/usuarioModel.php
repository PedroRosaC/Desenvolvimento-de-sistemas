<?php
require_once 'ConexaoMysql.php';

class usuarioModel
{
    protected $id;
    protected $email;
    protected $senha;

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }

    //Método construtor

    public function __construct()
    {
    }

    //Métodos especialistas
    public function Autenticar()
    {

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";

        $db = new ConexaoMysql();

        $db->Conectar();

        $resultList = $db->Consultar($sql);

        if($db->total == 1){
            
            $_SESSION['login'] = $email;
            header('location:../home.php');

        }

        else{
            header('location:../index.php?cod=171');
        }

        $db->Desconectar();

        return $resultList;
    }

    /*
     * Carrega a raça pelo identificador único
     */

    public function loadById($id)
    {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM usuario where id =' . $id;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //Se retornou preenche as propriedades de raça
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->email = $value['email'];
                $this->senha = $value['senha'];
            }
        }



        //Desconectar do banco
        $db->Desconectar();

        return $resultList;
    }

    public function insert()
    {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'INSERT INTO usuario values'
            . '(0,"' . $this->email . '",'
            . '"' . $this->senha . '")';
        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

    public function update()
    {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        $sql = 'UPDATE usuario SET '
            . 'email="' . $this->email . '",'
            . 'senha="' . $this->senha . '",'
            . 'WHERE id = ' . $this->id;

        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

    public function delete()
    {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        $sql = 'DELETE FROM usuario WHERE id=' . $this->id;


        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }
}
