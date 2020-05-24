<?php
  class produto
  {
    private $nome;
    private $descricao;
    private $preco;
    private $fornecedor;

    public function __construct($nom,$desc,$pre,$forn)
    {
      $this->nome=$nom;
      $this->descricao=$desc;
      $this->preco=$pre;
      $this->fornecedor[]=$forn;
    }

    //metodos Gets
    function getNome()
    {
      return $this->nome;
    }
    function getDesc()
    {
      return $this->descricao;
    }
    function getPreco()
    {
      return $this->preco;
    }
    function getFornecedor()
    {
      return $this->fornecedor;
    }

    //metodos Sets
    function setNome()
    {
      $this->nome=$nome;
    }
    function setDesc()
    {
      $this->descricao=$descricao;
    }
    function setPreco()
    {
      $this->preco=$preco;
    }
    function setFornecedor($fornecedor)
    {
      $this->fornecedor[]=$fornecedor;
    }
  }
?>
