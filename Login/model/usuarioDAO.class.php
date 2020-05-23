<?php  
	class usuarioDAO extends Conexao{

		function __construct() {
			parent:: __construct();
		}

		function inserir($usuario) {
		  $insert = "INSERT INTO usuario (nome, cnpj, celular, email, senha) VALUES (?,?,?,?,?)";
            try {
                $result = $this->db->prepare($insert);               
                $result->bindValue(1,$usuario->getNome());
                $result->bindValue(2,$usuario->getCnpj());
                $result->bindValue(3,$usuario->getCelular());
                $result->bindValue(4,$usuario->getEmail());
                $result->bindValue(5,$usuario->getSenha());
                $result->execute();
                $contar = $result->rowCount();
                    if($contar>0) {
                        $retorno = true;
                                                 
                    } else {
                        $retorno =false;                       
                    }
                } catch (PDOException $e) {
                    echo 'ERROR:'.$e->getMessage();     
                }
        }

        function autenticar($usuario) {
            $sql = "SELECT usuario_id, nome FROM usuario WHERE email = ? AND senha = ?";
            try {
                //preparar frase
                $com = $this->db->prepare($sql);
                //substituir os pontos de interrogação
                $com->bindValue(1, $usuario->getEmail());
                $com->bindValue(2, $usuario->getSenha());
                $com->execute();
                $resultado = $com->fetchAll(PDO::FETCH_OBJ);
                $this->db = null;
                return $resultado;
            } catch (Exception $e) { 
                die ($e->getMessage());
            }
        }

        function alterarSenha($usuario) {
            $sql = "UPDATE usuario SET senha = ? WHERE email = ?";
            try {
                //preparar frase
                $com = $this->db->prepare($sql);
                //substituir os pontos de interrogação
                $com->bindValue(1, $usuario->getSenha());
                $com->bindValue(2, $usuario->getEmail());
                $retorno = $com->execute();
                $this->db = null;
                if(!$retorno) {
                    echo "Erro ao Alterar a senha do usuário";
                }
            } catch (Exception $e) {
                die ($e->getMessage());
            }
        }

        function verificarUsuarioEmail($usuario) {
            $sql = "SELECT usuario_id, nome FROM usuario WHERE email = ?";
            try{
                //preparar frase
                $com = $this->db->prepare($sql);
                //substituir os pontos de interrogação
                $com->bindValue(1, $usuario->getEmail());
                $retorno = $com->execute();
                $this->db = null;

                if(!$retorno){
                    echo "Erro ao Buscar Usuário por e-Mail";
                } else {
                    $resultado = $com->fetchAll(PDO::FETCH_OBJ);
                    return $resultado;
                }
            } catch (Exception $e) {
                die ($e->getMessage());
            }   
        }

        public function buscarUmUsuario($usuario) {
            $sql = "SELECT * FROM usuario where usuario_id = ?";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(1, $usuario->getId());
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                $this->db = null;

                return $resultado;
            } catch (PDOException $e) {
                die( $e->getMessage());
            }
        } 
	}
?>