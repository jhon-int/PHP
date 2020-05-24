<?php
  class itensVenda
  {
    private $qtde;
    private $preco;
    private $produto;
    //metodo construtor
    function __construct($qtde, $preco, $prod)
    {
      $this->qtde = $qtde;
      $this->preco = $preco;
      $this->produto = $prod;
    }

    //metodos gets
    function getQtde()
    {
      return $this->qtde;
    }

    function getPreco()
    {
      return $this->preco;
    }

    function getProduto()
    {
      return $this->produto;
    }
  }//classe
?>
