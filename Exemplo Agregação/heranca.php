<?php
  require_once "conta.class.php";
  require_once "corrente.class.php";
  require_once "poupanca.class.php";

  //conta
  //$conta = new conta("123-3", "2564-64", 001, 500);
  echo "<pre>";
  //var_dump($conta);
  echo "</pre>";

  //corrente
  $corrente = new corrente(1000, "123-3", "2564-64", 001, 500);
  echo "<pre>";
  //var_dump($corrente);
  echo "</pre>";

  //poupanca
  $poupanca = new poupanca(25, "123-3", "2564-64", 001, 500);
  echo "<pre>";
  //var_dump($poupanca);
  echo "</pre>";

  //Informações
  echo "Banco: {$poupanca->getBanco()}<br/>";
  echo "Agencia: {$poupanca->getAgencia()}<br/>";
  echo "Numero da Conta: {$poupanca->getNumeroConta()}<br/>";
  echo "Aniversario: {$poupanca->getAniversario()}<br/>";

  echo "Saldo Antes: {$corrente->getSaldo()}<br/>";
  $corrente->Retirada(800);
  echo "Saldo: {$corrente->getSaldo()}<br/>";
?>
