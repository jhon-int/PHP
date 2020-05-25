<?php
	
	class Cadastro {
		private $id;
		private $login;
		private $nome;
		private $email;
		private $senha;
		
		function __construct($id, $login, $nome, $email, $senha) {
			$this->id = $id;
			$this->login = $login;
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
		}
		
		
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
			
			return $this;
		}
		
		public function getLogin() {
			return $this->login;
		}
		
		public function setLogin($login) {
			$this->login = $login;
			
			return $this;
		}
		
		public function getNome() {
			return $this->nome;
		}
		
		public function setNome($nome) {
			$this->nome = $nome;
			
			return $this;
		}
		
		public function getEmail() {
			return $this->email;
		}
		
		public function setEmail($email) {
			$this->email = $email;
			
			return $this;
		}
		
		
		public function getSenha() {
			return $this->senha;
		}
		
		
		public function setSenha($senha) {
			$this->senha = $senha;
			
			return $this;
		}
	}
?>