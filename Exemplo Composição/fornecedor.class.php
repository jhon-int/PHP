<?php
  class fornecedor
  {
    private $cnpj;
    private $razaoSocial;
    private $email;
    private $telefone;
    private $produto;

    public function __construct($cnpj,$razao,$email,$tel,$prod)
    {
      $this->cnpj=$cnpj;
      $this->razaoSocail=$razao;
      $this->email=$email;
      $this->telefone=$tel;
      $this->produto=$prod;
    }

    //metodos Gets
    function getCNPJ()
    {
      return $this->cnpj;
    }
    function getRazao()
    {
      return $this->razaoSocail;
    }
    function getEmail()
    {
      return $this->email;
    }
    function getTelefone()
    {
      return $this->telefone;
    }
    function getProduto()
    {
      return $this->produto;
    }

    //metodos Sets
    function setCNPJ($cnpj)
    {
      $this->cnpj=$cnpj;
    }
    function setRazao($razao)
    {
      $this->razaoSocail=$razao;
    }
    function setEmail($email)
    {
      $this->email=$email;
    }
    function setTelefone($tel)
    {
      $this->telefone=$tel;
    }
    function setProduto($prod)
    {
      $this->produto[]=$prod;
    }
  }
?>
