<?php
  class venda
  {
    private $dataVen;
    private $formPgto;
    private $itens;
    //método construtor
    function __construct($data, $forma, $qtde, $preco, $prod)
    {
        $this->dataVen = $data;
        $this->formPgto = $forma;
        $this->itens[] = new itensVenda($qtde, $preco, $prod);
    }

    function caltotal()
    {
      $cal = 0;
      foreach ($this->itens as $dado) {
        $cal = $cal + ($dado->getQtde()*$dado->getPreco());
      }
      return $cal;
    }

    //metodos gets
    function getData()
    {
      return $this->dataVen;
    }

    function getForma()
    {
      return $this->formPgto;
    }

    function getItens()
    {
      return $this->itens;
    }

    //metodos sets
    function setItens($qde, $preco, $prod)
    {
      $this->itens[] = new itensVenda($qde, $preco, $prod);
    }
  }
?>
