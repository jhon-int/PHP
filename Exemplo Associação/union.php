<?php
  require_once "produtos.class.php";
  require_once "fornecedor.class.php";
  //objeto fornecedor
  $forn1 = new fornecedor("99.999.888/0001-45","Faber Castel", "faberC@f.com", "(11)88736688");
  $forn2 = new fornecedor("88.777.555/0001-65","Tilibra", "Tilibra@T.com", "(11)98656688");
  //objeto produtos
  $prod = new produto("Lapis","Numero 2", 2.00, $forn1);
  $prod->setFornecedor($forn2);
  echo "<pre>";
  var_dump($prod);
  echo "</pre>";
  echo "<h1>Produto</h1>";
  echo "Nome: {$prod->getNome()}<br/>";
  echo "Descricao: {$prod->getDesc()}<br/>";
  echo "Preco: R$ ".number_format($prod->getPreco(),2,",",".")."<br/>";
  echo "<h2>Fornecedores</h2>";

  for ($x=0; $x < count($prod->getFornecedor()); $x++) {
    echo "{$prod->getFornecedor()[$x]->getCNPJ()} <br/>";
    echo "{$prod->getFornecedor()[$x]->getRazao()} <br/>";
    echo "{$prod->getFornecedor()[$x]->getTelefone()} <br/>";
    echo "{$prod->getFornecedor()[$x]->getEmail()} <br/>";
    echo "<br />";
  }
