<?php
  require_once "produtos.class.php";
  require_once "itensVendas.class.php";
  require_once "Vendas.class.php";

  $prod = new produto("lapis", "numero 2 preto", 1.50, null);
  $prod2 = new produto("Caderno", "espiral 150 folhas", 5.25, null);

  $ven = new venda("20/03/2018", "A vista", 10, 1.25, $prod);

  $ven->setItens(1, 5.25, $prod2);
  echo "R$: ".number_format($ven->caltotal(),2,",",".")."<br/>";

  echo "<pre>";
  var_dump($ven);
  echo "</pre>";
?>
