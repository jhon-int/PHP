<?php
	if ($_GET) {
		//recebeu par�metros
		$controle = $_GET['controller'];
		$metodo = $_GET["metodo"];
		require_once "controller/" . $controle. ".class.php";
		$obj = new $controle();
		$obj->$metodo();
		
	} else {
		//posi��o inicial
		require_once "controller/inicio.class.php";
		$ini = new inicio();
		$ini->inicio(); 
	}
?>