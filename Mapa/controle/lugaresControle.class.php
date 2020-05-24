<?php
	include_once "funcao.php";
	class lugaresControle{
		
		function mostrarLugares()
		{
			$lugaresDAO = new lugaresDAO();
			$retorno = $lugaresDAO->buscarLugares();
			//var_dump($retorno);
			require_once "visao/LugarDinamico.php";
		}
	}
?>