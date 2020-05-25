<?php
	require_once"../modelo/Conecta.class.php";
	require_once"../modelo/generoDAO.class.php";
	require_once"../modelo/genero.class.php";

	$opcao = array("uri"=>"http://localhost");
	$server = new soapServer(null, $opcao);
	//criar o serviço
	class generoServico{

		function consultarGeneros() {
			$genDAO = new generoDAO();
			$ret = $genDAO->buscarTodos();
			return $ret;
		}// fim consultarGeneros

		function inserirGeneros($descricao) {
			$gen = new genero(null, $descricao);
			$genDAO = new generoDAO();
			$genDAO->inserir($gen);
		}

		function excluirGeneros($id) {
			$gen = new genero($id, null);
			$genDAO = new generoDAO();
			$genDAO->excluir($gen);
		}
	}// fim GeneroServico class principal

	$server->setObject(new generoServico());
	$server->handle();
	// $objeto = new generoServico();
	// $objeto->excluirGeneros(1);
?>