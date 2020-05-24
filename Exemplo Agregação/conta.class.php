<?php
  abstract class conta
  {
    protected $agencia;
    protected $numeroconta;
    protected $banco;
    protected $saldo;

    function __construct($agencia,$numc,$banco,$saldo)
    {
      $this->agencia=$agencia;
      $this->numeroconta=$numc;
      $this->banco=$banco;
      $this->saldo=$saldo;
    }

    function getAgencia()
    {
      return $this->agencia;
    }
    function getNumeroConta()
    {
      return $this->numeroconta;
    }
    function getBanco()
    {
      return $this->banco;
    }
    function getSaldo()
    {
      return $this->saldo;
    }
    function Retirada($valor)
    {
      $this->saldo -= $valor;
    }
    abstract function deposito($valor);

    //metodos sets
    function setAgencia($agencia)
    {
      $this->agencia=$agencia;
    }
    function setNumeroConta($numc)
    {
      $this->numeroconta=$numc;
    }
    function setBanco($banco)
    {
      $this->banco=$banco;
    }
    function setSaldo($saldo)
    {
      $this->saldo=$saldo;
    }
  }
?>
