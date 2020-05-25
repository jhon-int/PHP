<?php
	//nusoap
	include "../lib/nusoap.php";
	require_once "../model/conexao.class.php";
	require_once "../model/Noticia.class.php";
	require_once "../model/NoticiaDAO.class.php";

	$servidor = new nusoap_server();
	$servidor->configureWSDL("Noticia");
	$servidor->wsdl->schemaTargetNamespace = "Noticia";

	class noticiaService {

		function listarNoticiaService() {
			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->allNews();
			return json_encode($ret);
		}

		function listarNoticiaIdService($idnoticia){
			$not = new Noticia($idnoticia);
			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->post($not);
			return json_encode($ret);
		}

		function listarNoticiaCursoIdService($idnoticia){
			$not = new Noticia($idnoticia);
			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->oneCourse($not);
			return json_encode($ret);
		}

		function editarNoticias($idnoticia) {
			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->edit($idnoticia);
			return $ret;
		}
	}

	//registrar servico
	$servidor->register("noticiaService.listarNoticiaService",
									array(),
									array("retorno"=>"xsd:string"),
									"Noticia",
									"Noticia#listarNoticiaService",
									"rpc",
									"encoded",
									"Buscar todos Noticia do Banco de Dados");
									//registrar servico

	$servidor->register("noticiaService.listarNoticiaIdService",
									array("idnoticia"=>"xsd:string"),
									array("retorno"=>"xsd:string"),
									"Noticia",
									"Noticia#listarNoticiaIdService",
									"rpc",
									"encoded",
									"Noticia no Banco de Dados");

	$servidor->register("noticiaService.listarNoticiaCursoIdService",
									array("idnoticia"=>"xsd:string"),
									array("retorno"=>"xsd:string"),
									"Noticia",
									"Noticia#listarNoticiaIdService",
									"rpc",
									"encoded",
									"Noticia no Banco de Dados");

	$servidor->register("noticiaService.editarNoticias",
									array("idnoticia"=>"xsd:string"),
									array("retorno"=>"xsd:string"),
									"Noticia",
									"Noticia#editarNoticias",
									"rpc",
									"encoded",
									"Noticia no Banco de Dados");
	
	//verificar se tem chamada
	$chamada = file_get_contents("php://input");
	$servidor->service($chamada); 
	// $a = new noticiaService();
	// $ret = $a->listarNoticiaIdService(2);
	// var_dump($ret);
?>