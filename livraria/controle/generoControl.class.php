<?php  
	class generoControl {

		function buscarTodos() {
			//acessar servico genero	
			$opcao = array("location"=>"http://localhost/livraria/service/generoServico.class.php","uri"=>"http://localhost");
			$client = new SoapClient(null, $opcao);
			$ret = $client->consultarGeneros();
			require_once "view/listarGenero.php";
		}

		function inserir() {
			require_once"view/inserirGenero.php";
			if ($_POST) {
				$opcao = array("location"=>"http://localhost/livraria/service/generoServico.class.php","uri"=>"http://localhost");
				$client = new SoapClient(null, $opcao);
				$client->inserirGeneros($_POST["descricao"]);
				header("location: index.php?controle=generoControl&metodo=buscarTodos");
			}
		}

		function excluir() {
			if (isset($_GET["id"])) {
				$opcao = array("location"=>"http://localhost/livraria/service/generoServico.class.php","uri"=>"http://localhost");
				$client = new SoapClient(null, $opcao);
				$client->excluirGeneros($_GET["id"]);
				header("location: index.php?controle=generoControl&metodo=buscarTodos");
			}
		}
	}// fim class inicio
?>