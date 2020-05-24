<?php
	if ($_GET)
	{
		//recebeu parтmetros
		$controle = $_GET['controle'];
		$metodo = $_GET["metodo"];
		require_once "controle/" . $controle. ".class.php";
		$obj = new $controle();
		$obj->$metodo();
	}
	else
	{
		//posiчуo inicial
		require_once "controle/inicio.class.php";
		$ini = new inicio();
		$ini->inicio();
	}
?>