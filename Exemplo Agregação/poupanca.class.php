<?php
  class poupanca extends conta
  {
    private $aniversario;

    function __construct($aniversario,$agencia,$numc,$banco,$saldo)
    {
      parent:: __construct($agencia,$numc,$banco,$saldo);
      $this->aniversario=$aniversario;
    }

    function getAniversario()
    {
      return $this->aniversario;
    }
    function setAniversario($aniversario)
    {
      $this->aniversario=$aniversario;
    }
    function deposito($valor)
    {
      $this->saldo+=$valor;
    }
  }
?>
