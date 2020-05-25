<?php 	
require_once "../model/Conexao.class.php";
require_once "../model/Noticia.class.php";
require_once "../model/NoticiaDAO.class.php";
require_once "../model/CursoDAO.class.php";
class adminServiceRest
{
	public function insertNotService($titulo ,$brevDesc ,$notCompl,$categoria)
	{
		$not = new Noticia(null,$titulo,$brevDesc,$notCompl,$categoria);
		$noticaDAO = new NoticiaDAO();
		$noticaDAO->Inserir($not);
	}

	public function buscarCurso()
	{
		$cursoDAO = new CursoDAO();
		$retorno = $cursoDAO->allCursos();

		return json_encode($retorno); 
	}
}

if(isset($_GET)) {
	if ($_GET["oper"] == "findAll") {
		$cursoREST = new adminServiceRest();
		$ret = $cursoREST->buscarCurso();
		exit($ret);
	}
}

if (isset($_POST)) {
	$serv = new adminServiceRest();
	$serv->insertNotService($_POST["titulo"],$_POST["brevDesc"],$_POST["notCompl"],$_POST["categoria"]);
	exit();
}

