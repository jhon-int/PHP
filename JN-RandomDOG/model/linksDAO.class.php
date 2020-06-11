<?php  
	class linksDAO extends Conexao{

		function __construct() {

			parent:: __construct();
		}

		function inserir($link) {

		  $insert = "INSERT INTO links (descricao, link) VALUES (?,?)";
            try {
                $result = $this->db->prepare($insert);               
                $result->bindValue(1,$link->getDescricao());
                $result->bindValue(2,$link->getLink());
                $result->execute();

                $contar = $result->rowCount();
                    if($contar > 0) {
                        $retorno = true;                  
                    } else {
                        $retorno =false;                       
                    }
                } 
            catch (PDOException $e) {
                echo 'ERROR:'.$e->getMessage();      
            }
        }

        function buscar() {
            
            $sql = "SELECT * FROM links";
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

        function buscarLink($link) {
            
            $sql = "SELECT * FROM links WHERE link_id = ?";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(1, $link->getId());
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                $this->db = null;
                return $resultado;
            } 
            catch (PDOException $e) {
                die( $e->getMessage());
            }
        } 

        function excluir($link) {
            
            $sql = "DELETE FROM links WHERE link_id = ?";
            try {
                $stmt = $this->db->prepare  ($sql);
                $stmt->bindValue(1, $link->getId());
                $stmt->execute();
                $this->db = null;
                
            }
            catch(Exception $e) {
                die ($e->getMessage());
            }
        }

        function editar($link) {

          $insert = "UPDATE links SET descricao = ? WHERE link_id = ?";
            try {
                $result = $this->db->prepare($insert);               
                $result->bindValue(1,$link->getDescricao());
                $result->bindValue(2,$link->getId());
                $result->execute();

            } 
            catch (PDOException $e) {
                echo 'ERROR:'.$e->getMessage();      
            }
        }
	}
?>