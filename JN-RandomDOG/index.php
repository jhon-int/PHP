<?php
	if($_GET)
	{
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "controller/".$controle.".class.php";
		$obj = new $controle;
		$obj->$metodo();
	}
	else
	{
		require_once "controller/inicioControle.class.php";
		$contControl = new inicioControle();
		$contControl->inicio();
	}
?>