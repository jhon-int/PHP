<?php
	class generoDAO extends Conexao {

		function __construct() {
			parent:: __construct();
		}

		function buscarTodos() {
			$sql = "SELECT * FROM genero";
			try {
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			} catch(Exception $e ) {
				die ($e->getMessage());
			}
		}//busca todos

		function inserir($genero){
			$sql = "INSERT INTO genero (descricao) VALUES(?)";
			try {
				//prepara a frase sql para execução
				$stm = $this->db->prepare($sql);
				//substituir os pontos de interrogação
				$stm->bindValue(1, $genero->getDescricao());
				//executar a frase sql no banco
				$stm->execute();
				//fechar conexão com o BD
				$this->db = null;
			} catch(Exception $e) {
				die ($e->getMessage());
			}
		}//inserir

		function excluir($genero){
			$sql = "DELETE FROM genero WHERE idgenero = ?";
			try {
				//prepara a frase sql para execução
				$stm = $this->db->prepare($sql);
				//substituir os pontos de interrogação
				$stm->bindValue(1, $genero->getId());
				//executar a frase sql no banco
				$stm->execute();
				//fechar conexão com o BD
				$this->db = null;
			} catch(Exception $e ) {
				die ($e->getMessage());
			}
		}//inserir
	}
?>