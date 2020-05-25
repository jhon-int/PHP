<?php 

	class UsuarioDAO extends Conexao {
		
		function __construct() {
			parent::__construct();
		}

		public function Inserir($usuario) {

				$login = $usuario->getLogin();
				$nome = $usuario->getNome();
				$email = $usuario->getEmail();
				$senha = $usuario->getSenha();

				return $this->table("usuarios")->fields(["login", "nome", "email", "senha"])->insert([$login, $nome, $email, $senha]);	
		}//inserir

		public function authentication($usuario) {

			$auth = $this->table('usuarios')->fields(['email', 'senha'])->where('email = ?')->select([$usuario->getEmail()]);

			if (count($auth) > 0) {
				// EMAIL VÁLIDO
				$senha = $usuario->getSenha();
				$hash = $auth[0]->senha;

				if (password_verify($senha, $hash)) {
					// USUÁRIO VALIDO
					return true;
				} else {
					return false;
				}
				
			} else {
				return false;
			}
		}

		public function logged($usuario) {
			return $this->table('usuarios')->fields(['*'])->where('email = ?')->select([$usuario->getEmail()]);
		}
	}
