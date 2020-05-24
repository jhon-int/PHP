<?php 
	class lugaresDAO extends conexao {
		function __construct()
		{
			parent:: __construct();
		}

		function buscarLugares()
		{
			$sql = "SELECT * FROM lugares";
			try
			{
				$stmt = $this->db->prepare($sql);
				$ret = $stmt->execute();
				$this->db = null;
				if(!$ret)
				{
					die("Erro ao buscar todos os alunos");
				}
				else
				{
					$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (PDOException $e)
			{
				die( $e->getMessage());
			}
		}//buscarTodos	
	}
?>