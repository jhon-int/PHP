<?php
  class corrente extends conta
  {
    private $limite;

    function __construct($limite,$agencia,$numc,$banco,$saldo)
    {
      parent:: __construct($agencia,$numc,$banco,$saldo);
      $this->limite=$limite;
    }

    //metodo get
    function getLimite()
    {
      return $this->limite;
    }
    function Retirada($valor)
    {
      if($this->saldo + $this->limite >= $valor){
        //retirar
        parent:: Retirada($valor);
      }
      else{
        echo "Saldo insuficiente -> ";
      }
    }
    function deposito($valor)
    {
      $this->saldo+=$valor;
    }

    //metodo set
    function setLimite($limite)
    {
      $this->limite=$limite;
    }
  }//classe
?>
