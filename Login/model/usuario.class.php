<?php 
	class usuario {
		private $id;
		private $nome;
        private $cnpj;
        private $celular;
		private $email;
        private $senha;

        public function __construct($id="" , $nome = "", $cnpj = "", $celular = "", $email = "", $senha = "") {
            $this->id = $id;
            $this->nome = $nome;
            $this->cnpj = $cnpj;
            $this->celular = $celular;
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

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;

            return $this;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;

            return $this;
        }

        public function getCelular() {
            return $this->celular;
        }

        public function setCelular($celular) {
            $this->celular = $celular;

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