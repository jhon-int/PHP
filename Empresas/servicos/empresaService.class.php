<?php
	include "../lib/nusoap.php";
	require_once "../modelo/conexao.class.php";
	require_once "../modelo/empresa.class.php";
	require_once "../modelo/empresaDAO.class.php";

	$servidor = new nusoap_server();
	//criar wsdl
	$servidor->configureWSDL("empresa");
	$servidor->wsdl->schemaTargetNamespace = "empresa";
	
	class empresaService {
		
		function BuscarEmpresas() {
			$empresaDAO = new empresaDAO();
			$retorno = $empresaDAO->buscarEmpresas();
			return json_encode($retorno);
		}
	}
	
	//registrar servico
	$servidor->register("empresaService.BuscarEmpresas",
						array(),
						array("retorno"=>"xsd:string"),
						"empresa",
						"empresa#BuscarEmpresas",
						"rpc",
						"encoded",
						"Lista todos os empresas cadastradas");
	
	$chamada = file_get_contents("php://input");
	$servidor->service($chamada); 
?>