<?php
	$resultado = file_get_contents('http://cep.republicavirtual.com.br/web_cep.php?cep=17017410&formato=json');  
 	$resultado = json_decode($resultado, true);
 	echo $resultado["bairro"] ."<br>";
 	echo 'Resposta: ';
	var_dump($resultado);
?>