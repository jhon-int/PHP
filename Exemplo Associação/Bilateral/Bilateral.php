<?php
  require_once "produtos.class.php";
  require_once "fornecedor.class.php";

  $prod1 = new produto("Lapis","Numero 2 preto", 2.00, null);
  $prod2 = new produto("caderno","espiral 100 folhas", 10.50, null);

  echo "<pre>";
  var_dump($prod1);
  echo "</pre>";

  $forn1 = new fornecedor("11111", "Faber Castel", "faber@gmail.com", "(11)999999", $prod1);
  $forn2 = new fornecedor("22222", "Tilibra", "Tilibra@gmail.com", "(14)45613863", $prod2);
  $forn3 = new fornecedor("33333", "Pilot", "pilot@gmail.com", "(15)65314598", null);

  $prod1->setFornecedor($forn3);
  echo "{$prod1->getNome()}<br>";

  $fornecedor = $prod1->getFornecedor();
  echo $fornecedor[1]->getRazao();
  //echo "{$prod1->getFornecedor()[1]->getRazao()}<br>";
?>
