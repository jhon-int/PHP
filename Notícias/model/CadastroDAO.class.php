<?php 

	class CadastroDAO extends Conexao
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function Inserir($usuario)
		{

				$login = $usuario->getLogin();
				$nome = $usuario->getNome();
				$email = $usuario->getEmail();
				$senha = $usuario->getSenha();

				return $this->insert("usuarios",["login", "nome", "email", "senha"],[$login, $nome, $email, $senha]);
	
		}//inserir
	}
?>