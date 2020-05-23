<?php
	$resultado = file_get_contents('http://servicos.cptec.inpe.br/XML/listaCidades?city=orlandia');  
 
 	$resultado = simplexml_load_string($resultado);
 	foreach($resultado->cidade as $dado) {
		echo "{$dado->nome} <br />";
		echo "{$dado->uf} <br />";
		echo "{$dado->id} <br /><br />";
 	}
 ?>