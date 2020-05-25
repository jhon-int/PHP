<?php 
	require_once "../model/Conexao.class.php";
	require_once "../model/NoticiaDAO.class.php";
	require_once "../model/Noticia.class.php";

	$opcao = array('uri' => 'http://localhost');
	$server = new SoapServer(null,$opcao);

	class adminService {

		function consultarNoticias() {
			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->allNews();
			return $ret;
		}

		function editarNotService($id) { 
			$not = new Noticia($id);
			$noticiaDAO = new NoticiaDAO();
			$ret = $noticiaDAO->edit($not);
			return $ret;
		}

		function deleteNotService($id) {
			$not = new Noticia($id);
			$noticiaDAO = new NoticiaDAO();
			$noticiaDAO->destroy($not); 
		}
	}//fim classe

	$server->setObject(new adminService());
	$server->handle();


	/*$bacon = new adminService();
	$ret = $bacon->editarNotService(1);
	var_dump($ret);
	die;*/
?>