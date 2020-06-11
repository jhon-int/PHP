<?php
	require_once "../model/conexao.class.php";
	require_once "../model/links.class.php";
	require_once "../model/linksDAO.class.php";

	class linksServico {

		function inserir($descricao, $url) {

			$links = new links(null, $descricao, $url);
			$linksDAO = new linksDAO();
			$linksDAO->inserir($links);
		}

		function buscar() {

			$linksDAO = new linksDAO();
			$retorno = $linksDAO->buscar();
			return json_encode($retorno);
		}

		function buscarLink($id) {

			$links = new links($id, null, null);
			$linksDAO = new linksDAO();
			$retorno = $linksDAO->buscarLink($links);
			return json_encode($retorno);
		}

		function excluir($id) {

			$links = new links($id, null, null);
			$linksDAO = new linksDAO();
			$linksDAO->excluir($links);
		}

		function editar($id, $descricao) {

			$links = new links($id, $descricao, null);
			$linksDAO = new linksDAO();
			$linksDAO->editar($links);
		}
	}

	if(isset($_GET["oper"])) {

		if($_GET["oper"] == "inserir") {
			
			$serv = new linksServico();
			$serv->inserir($_GET["descricao"], $_GET["url"]);
			exit();
		}
		
		if($_GET["oper"] == "buscar") {

			$serv = new linksServico();
			$ret = $serv->buscar();
			exit($ret);
		}

		if($_GET["oper"] == "buscarLink") {

			$serv = new linksServico();
			$ret = $serv->buscarLink($_GET["id"]);
			exit($ret);
		}

		if($_GET["oper"] == "excluir") {

			$serv = new linksServico();
			$ret = $serv->excluir($_GET["id"]); 
			exit($ret);
		}

		if($_GET["oper"] == "editar") {
			
			$serv = new linksServico();
			$serv->editar($_GET["id"], $_GET["descricao"]);
			exit();
		}
	}
?>