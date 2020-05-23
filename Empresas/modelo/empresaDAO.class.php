<?php
	class empresaDAO extends conexao {

		public function __construct() {
			parent::__construct();
		}
		
		public function buscarEmpresas() {
			$sql = "SELECT * FROM empresa";
			try {
				$stmt = $this->db->prepare($sql);
				$stmt->execute();
				$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
				$this->db = null;
				return $resultado;
			}
			catch (PDOException $e) {
				die( $e->getMessage());
			}
		}
		
		function inserirEmpresa($empresa) {
			$sql = "INSERT INTO empresa (cnpj, nome, nomeFantasia, email, atividadePrincipal, municipio, uf, dataAbertura, naturezaJuridica, capitalSocial, situacao) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			try {
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1, $empresa->getCNPJ());
				$stmt->bindValue(2, $empresa->getNome());
				$stmt->bindValue(3, $empresa->getFantasia());
				$stmt->bindValue(4, $empresa->getEmail());
				$stmt->bindValue(5, $empresa->getAtividade());
				$stmt->bindValue(6, $empresa->getMunicipio());
				$stmt->bindValue(7, $empresa->getUF());
				$stmt->bindValue(8, $empresa->getAbertura());
				$stmt->bindValue(9, $empresa->getNatureza());
				$stmt->bindValue(10, $empresa->getCapital());
				$stmt->bindValue(11, $empresa->getSituacao());
				$ret = $stmt->execute();
				$this->db = null;
				
			}//try
			catch (PDOException $e) {
				die( $e->getMessage());
			}
		}//método inserir
	}//classe
?>