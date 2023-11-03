<?php
require_once 'ConexaoMysql.php';

class perfilModel //extends usuarioModel
{
    protected $id;
    protected $nome;
    protected $tipo;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    //public function getUsuario_id()
    //{
    //    return $this->usuario_id;
    //}

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }
    //public function setUsuario_id($usuario_id): void
    //{
     //   $this->usuario_id = $usuario_id;
    //}

    //Método construtor

    public function __construct()
    {}

    //Métodos especialistas
    public function AutenticarPerfil()
    {

        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $sql = "SELECT * FROM perfil where nome = '$nome' and kids_ou_nao = '$tipo'";

        $db = new ConexaoMysql();

        $db->Conectar();

        $resultList = $db->Consultar($sql);

       

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
        $sql = 'SELECT * FROM pefis where id =' . $id;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //Se retornou preenche as propriedades de raça
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->tipo = $value['kids_ou_nao'];
            }

            return $resultList;
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
       
        $sql = 'INSERT INTO `perfis`(`id`, `nome`, `kids_ou_nao`) VALUES (1,'.$this->nome.','.$this->tipo.')';
  
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

        $sql = 'UPDATE perfis SET '
            . 'email="' . $this->nome . '",'
            . 'senha="' . $this->tipo . '",'
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

        $sql = 'DELETE FROM perfil WHERE id=' . $this->id;


        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }
}

