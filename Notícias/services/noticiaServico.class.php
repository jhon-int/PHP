<?php
	require_once "../model/Conexao.class.php";
	require_once "../model/NoticiaDAO.class.php";
	require_once "../model/Noticia.class.php";

	$opcao = array('uri' => 'http://localhost');
	$server = new SoapServer(null,$opcao);
	
	//criar o serviço
	class noticiaServico {

		function consultarNoticias() {

			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->allNews();
			return $ret;
		}
	}

	$server->setObject(new noticiaServico());
	$server->handle();

	/*$bacon = new noticiaServico();
	$ret = $bacon->consultarNoticias();
	var_dump($ret);
	die;*/
?>