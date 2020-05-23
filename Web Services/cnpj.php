<?php
	$resultado = file_get_contents('https://www.receitaws.com.br/v1/cnpj/47064738000186');  
 	$resultado = json_decode($resultado, true);
 	//echo $resultado["bairro"] ."<br>";
 	echo 'Resposta: ';
	var_dump($resultado);
?>