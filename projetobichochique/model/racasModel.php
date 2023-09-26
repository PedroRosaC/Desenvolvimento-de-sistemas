<?php
//#declare <stdlib.h>
require_once 'ConexaoMysql.php';
/**
 * Description of racasModel
 *
 * @author aluno
 */
class racasModel {

    //Atributos ou propriedades
    protected $id;
    protected $nome;
    protected $descricao;
    protected $faixaPreco;
    protected $faixaPeso;
    
    //Métodos acessores (get) e modificadores (set)
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFaixaPreco() {
        return $this->faixaPreco;
    }

    public function getFaixaPeso() {
        return $this->faixaPeso;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setFaixaPreco($faixaPreco): void {
        $this->faixaPreco = $faixaPreco;
    }

    public function setFaixaPeso($faixaPeso): void {
        $this->faixaPeso = $faixaPeso;
    }

        
    //Método construtor
    public function __construct() {
        
    }
    
    //Métodos especialistas
    public function loadAll() {
        
          //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM racas';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
       
        //Desconectar do banco
        $db->Desconectar();
        
        return $resultList;
        
    }
        
    
     public function loadByid($id) {
        
          //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM racas where id='. $id;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
       if($db->total == 1){
           foreach($resultList as $value){
               $this->id = $value['id'];
               $this->descricao = $value['descricao'];
               $this->nome = $value['nome'];
               $this->faixapeso = $value['faixa_peso'];
               $this->faixapreco = $value['faixa_preco'];
           }
               
       }
        //Desconectar do banco
        $db->Desconectar();
        
        return $resultList;
        
    }
    
    public function Insert($id) {
        
          //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();
        
        //Criar consulta
        $sql = 'INSERT INTO racas values(0,"'.$this->nome.'","'.$this->descricao.'","'.$this->faixaPreco.'","'.$this->faixaPeso.'")' ;
        $resultList = $db->Executar($sql);
        //Executar método de consulta
        $db->Consultar($sql);
       
        //Desconectar do banco
        $db->Desconectar();
        
        return $db->total;
        
    }

}
