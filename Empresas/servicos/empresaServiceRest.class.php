<?php  
	require_once "../modelo/conexao.class.php";
	require_once "../modelo/empresa.class.php";
	require_once "../modelo/empresaDAO.class.php";

	class empresaServiceRest {

		function inserir($cnpj, $nome, $fantasia, $email, $atividadePrincipal, $municipio, $uf, $dataAbertura, $naturezaJuridica, $capitalSocial, $situacao) {
			$empresa = new empresa(null, $cnpj, $nome, $fantasia, $email, $atividadePrincipal, $municipio, $uf, $dataAbertura, $naturezaJuridica, $capitalSocial, $situacao);
			$empresaDAO = new empresaDAO();
			$empresaDAO->inserirEmpresa($empresa);
		}
	}

	if ($_POST) {
		$serv = new empresaServiceRest();
		//$serv->inserir($_POST["titulo"], $_POST["genero"], $_POST["editora"], $_POST["autor"]);
		$serv->inserir($_POST["cnpj"], $_POST["nome"], $_POST["fantasia"], $_POST["email"], $_POST["atividade_principal"], $_POST["municipio"], $_POST["uf"], $_POST["abertura"], $_POST["natureza_juridica"], $_POST["capital_social"], $_POST["situacao"]);
		exit();
	}
?>