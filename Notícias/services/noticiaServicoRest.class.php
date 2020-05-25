<?php
	require_once "model/Conexao.class.php";
    require_once "model/NoticiaDAO.class.php";
    require_once "model/Noticia.class.php";
	
	class noticiaServicoRest {

		function BuscarNoticiaNav() {
			
			$editoraDAO = new editoraDAO();
			$ret = $noticiaDAO->allNews();
			return json_encode($ret);
		}
	}
	
	if($_GET) {

		var_dump($_GET);
		die;

		if($_GET["oper"] == "BuscarNoticiaNav") {
			
			$noticiaRest = new noticiaServicoRest();
			$ret = $noticiaRest->BuscarNoticiaNav();
			//var_dump($ret);
			exit($ret);
		}
	}
	
?>