<?php  
	require_once"model/conexao.class.php";
	require_once"model/usuarioDAO.class.php";
	require_once"model/usuario.class.php";
  
	class loginController {

		function login() {  
			require_once "view/login.php";

			if($_POST) {
					$usuario = new usuario(null, null, null, null, $_POST["email"], (md5($_POST["senha"])));
					$usuarioDAO = new usuarioDAO();
					$retorno = $usuarioDAO->autenticar($usuario);
					
					if(count($retorno) > 0) {
						$_SESSION["nome"] = $retorno[0]->nome;
						$_SESSION["id"] = $retorno[0]->usuario_id;

						echo "<script>alert('Sucesso')</script>";
						
						header("Refresh: 0.2, index.php?controller=inicio&metodo=inicio");
					} else {
						echo "<script>alert('Os dados estão incorretos')</script>";
					}
			}
		}

		function logout() {
			session_start();
			$_SESSION = array();
			session_destroy();
			header("location:index.php");
		}

		function recuperar() {
			require_once"view/recuperar_senha.php";

			if($_POST) {
				$email = $_POST["email"];
				$usu = new usuario(null, null, null, null, $email);
				$usuDAO = new usuarioDAO();
				$ret = $usuDAO->verificarUsuarioEmail($usu);

				if(count($ret) > 0) {
					//envio email
					$assunto = "Solicitação de Recuperação de Senha";
					$link = "http://localhost/uniaolimpeza8_0/Site/index.php?controle=loginControle&metodo=novasenha&codigo=".base64_encode($email);
					$mensagem = "<h2>Olá " . $ret[0]->nome . "</h2><br /><p>
											Recebemos a solicitação de recuperação de senha contendo seu e-Mail.
											Caso não tenha sido requerida por você desconsidere essa mensagem. Caso 
											contrario click no link abaixo para informar nova senha</p>
											<a href='" . $link . "' >Clique Aqui</a>
											<br /><br />
											<p>Atenciosamente<br />União Limpeza</p>";
					$remetente = "";
					$nome_remetente = "";
					
					require_once "view/config.php";

					if(sendMail($assunto, $mensagem, $remetente, $nome_remetente, $email, $email)) {
						echo "<script>alert('Foi enviado um email para a recuperação de senha')</script>";
					} else {
						echo "<script>alert('Problema no envio do email. Tente Novamente!')</script>";
					}
				} else {
					echo "<script>alert('E-mail de usuário não cadastrado')</script>";
				}

			}
		}

		function novasenha() {
			require_once("view/novasenha.php");

			$email = "";

			if($_GET) {
				$email = base64_decode($_GET["codigo"]);
			}

			if($_POST) {
				if ($_POST["senha"] == $_POST["confirma"]) {
					$usu = new usuario(null, null, null, null,$email, md5($_POST["senha"]));
					$usuDAO = new usuarioDAO();
					$usuDAO->alterarSenha($usu);

					echo"<script>alert('senha alterada com sucesso');</script>";

					header("location:index.php");
				} else {
					echo"<script>alert('senhas nao conferem');</script>";
				}
			}
		}
	} 
?>