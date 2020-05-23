<?php
	if ($_GET) {
		//recebeu parтmetros
		$controle = $_GET['controller'];
		$metodo = $_GET["metodo"];
		require_once "controller/" . $controle. ".class.php";
		$obj = new $controle();
		$obj->$metodo();
		
	} else {
		//posiчуo inicial
		require_once "controller/inicio.class.php";
		$ini = new inicio();
		$ini->inicio(); 
	}
?>