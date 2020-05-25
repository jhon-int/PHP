<?php
	require_once "model/Conexao.class.php";
	require_once "model/NoticiaDAO.class.php";
	require_once "model/Noticia.class.php";
	require_once "model/Usuario.class.php";
	require_once "model/UsuarioDAO.class.php";
	require_once "model/CursoDAO.class.php";

	class adminControl {
		
		public function verifyUser() {
			
			if ($_POST) {

				$post = $_POST;
				$usu = new Usuario(null, null, null, $post["email"], $post["password"]);
				$usuDAO = new UsuarioDAO();
				
				if ($usuDAO->authentication($usu)) { 
					
					$dados = $usuDAO->logged($usu);
					
					$_SESSION["logged"] = true;
					$_SESSION["id"] = $dados[0]->id_usuario;
					$_SESSION["nome"] = $dados[0]->nome;
					$_SESSION["login"] = $dados[0]->login;
					$_SESSION["email"] = $dados[0]->email;
					
					$opcao = array(
						'location' => 'http://localhost/FatecNews/services/adminService.class.php',
						'uri' => 'http://localhost'
					);
					
					$client = new SoapClient(null, $opcao);
					$ret = $client->consultarNoticias();	
					
					require_once "view/admin/home.php";
				} else {
					echo "Email ou Senha incorreta";
				}
			} else if ($_GET) {
				//require_once "view/admin/home.php";
				header("Refresh: 0.2, view/admin/login.php");
			}
			
		}

		public function newNews() {

			$url = "http://localhost/FatecNews/services/adminServiceRest.class.php?oper=findAll";
			$retorno = file_get_contents($url);
			$cursos = json_decode($retorno);

			// var_dump("testeeee");
			// die;

			if (isset($_POST["titulo"])) {

				$curl = curl_init("http://localhost/FatecNews/services/adminServiceRest.class.php");
				$dados = array(
					'titulo' => $_POST["titulo"],
					'brevDesc' => $_POST["brevDesc"],
					'notCompl' => $_POST["notCompl"],
					'categoria' => $_POST["categoria"]
				);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
				curl_exec($curl);
				curl_close($curl);
				
				header('location:index.php?controle=adminControl&metodo=buscarTodosControl');
			}

			//var_dump("testeeee");
			//die;
			
			//header("Refresh: 0.2, view/admin/Noticia.php");
			//header('location:index.php?controle=adminControl&metodo=verifyUser');
			//header('location: view/admin/Noticia.php');
			require_once "view/admin/Noticia.php";
		}
		
		public function newAdmin() {

			require_once "view/admin/Cadastro.php";
		}
		
		public function buscarTodosControl() {

			$opcao = array(
				'location' => 'http://localhost/FatecNews/services/adminService.class.php',
				'uri' => 'http://localhost'
			);
			
			$client = new SoapClient(null, $opcao);
			$ret = $client->consultarNoticias(); 

			// var_dump("testeeee");
			// die;
			
			header('location:index.php?controle=adminControl&metodo=verifyUser');
			
		}
		
		public function deletar() { 

			if ($_GET) {
				$get = $_GET;
				$id = $get['id'];
				if (isset($id)) {
					$opcao = array(
						'location' => 'http://localhost/FatecNews/services/adminService.class.php',
						'uri' => 'http://localhost'
					);
					
					$client = new SoapClient(null, $opcao);
					$ret = $client->deleteNotService($id);
					
					header('location:index.php?controle=adminControl&metodo=buscarTodosControl');
				}
			}
		}

		public function editar() {

            if ($_GET) {
				$get = $_GET;
				$id = $get['id'];

				if (isset($id)) {
					$opcao = array(
						'location' => 'http://localhost/FatecNews/services/adminService.class.php',
						'uri' => 'http://localhost'
					);
					
					$client = new SoapClient(null, $opcao);
					$ret = $client->editarNotService($id);
					
					require_once "view/editar.php";
				}
			}


				/*$get = $_GET;
				$id = $get['id'];
				if (isset($id)) {
					$opcao = array(
						'location' => 'http://localhost/FatecNews/services/adminService.class.php',
						'uri' => 'http://localhost' 
					);
					
					$client = new SoapClient(null, $opcao);
					$ret = $client->deleteNotService($id);
					
					header('location:index.php?controle=adminControl&metodo=buscarTodosControl');
				}*/

		}

		function navControl() {

            if (isset($_GET["id"])) {

                include "lib/nusoap.php";

                if (isset($_GET["id"])) {
                    $client = new nusoap_client("http://localhost/FatecNews/services/noticiaService.class.php?wsdl");
                    $parametros = array("idnoticia" => $_GET["id"]);
                    $ret = $client->call("noticiaService.listarNoticiaCursoIdService", $parametros);
                    $ret = json_decode($ret, true);

                    require_once "view/Index.php";
                }

                //SOAP
                // $opcao = array("location"=>"http://localhost/FatecNews/services/noticiaServico.class.php","uri"=>"http://localhost");
                // $client = new SoapClient(null, $opcao);
                // $ret = $client->consultarNoticias();

                // require_once "view/Post.php";
            }
        }

		public function logout() {

			session_start();
			$_SESSION = array();
			session_destroy();
			//header("location:view/admin/login.php");
			header("Refresh: 0.2, view/admin/login.php");
		}
	}
?>