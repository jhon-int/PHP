<?php  
	require_once "model/conexao.class.php";
	require_once "model/usuarioDAO.class.php";
	require_once "model/usuario.class.php";
	
	class usuarioController {

		function cadastrar_usuario() {
			require_once"view/cadastrar_usuario.php";

			if($_POST) { 
				$erro = false;

				if($_POST["nome"] == "") {
					echo "<script>alert('Preencha o nome');</script>";
					$erro = true;
				}

				if($_POST["email"] == "") {
					echo "<script>alert('Preencha o email');</script>";
					$erro = true;
				}

				if($_POST["senha"] == "") {
					echo "<script>alert('Preencha a senha');</script>";
					$erro = true;
				}

				if($_POST["senha"] != $_POST["consenha"]) {
					echo "<script>alert('Senhas não conferem');</script>";
					$erro = true;
				}

				if (!$erro) {
					$usuario = new usuario (null, $_POST["nome"], $_POST["cnpj"], $_POST["celular"], $_POST["email"], md5($_POST["senha"])); 
					$usuarioDAO = new usuarioDAO();
					$retorno = $usuarioDAO->inserir($usuario);
				}
			}
		}
	}
?>