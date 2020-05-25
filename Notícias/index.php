<?php 
	if ($_GET) {
		$metodo = $_GET["metodo"];
		$controle = $_GET["controle"];
		require_once "controller/".$controle.".class.php";
		$obj = new $controle();
		$obj->$metodo();
		
	} else{
		require_once "controller/inicioControl.class.php";
		$obj = new inicioControl();
		$obj->inicio();
	}
?>