<?php
namespace Model;

class UserModel{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;

    public $total;

    public function __construct()
    {
        
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function login($email, $senha){
        $db = new ConexaoMysql;

        $db->conectar();
        $sql = 'SELECT = FROM usuarios WHERE email = "'.$email.'"AND senha = "'.$senha.'";';
        $resultList = $db->consultar($sql);
        if($db->total > 0){
            foreach ($resultList as $key => $value) {
                $this->$value['id'];
                $this->$value['nome'];
                $this->$value['email'];
                $this->$value['senha'];
            }
        }
        $db->desconectar();
        // retorna o total de registros que vem da consulta $sql no banco de dados
        $this->total = $db->total;
        return $this;
    }
}