<?php 

/*$conexao = ibase_connect("192.168.0.3:D:\Projetos\DATABASE\DATABASE.v.ACAI DA BARRA\00DASHBOARD\DATABASE.FDB","SYSDBA","masterkey");
$resultado = ibase_query($conexao, $sql);
var_dump($resultado);
die;
ibase_close($conexao);*/
 
// Conecta no banco de dados
// $hostname = "192.168.0.3:D:\Projetos\DATABASE\DATABASE.v.ACAI DA BARRA\00DASHBOARD\DATABASE.FDB";
// $usuario = "SYSDBA"; 
// $senha = "masterkey"; 


//$hostname = "serveracaidabarra.ddns.net";
$hostname = "C:/diretorio/banco.FDB";
$usuario = "root"; 
$senha = "";
$database = "usuario"; 

var_dump($hostname);
var_dump($usuario);
var_dump($senha);
var_dump($database);
 
$conexao = mysqli_connect($hostname, $usuario, $senha, $database);

//$conn = mysqli_connect($servername, $database, $username, $password);

var_dump($conexao);
die;
 
/*$Arr_Dados = array();
 
$Ds_Query = "SELECT * FROM cliente";
$Ds_Retorno = ibase_query( $Ds_Query );
 
while ( $Ds_Linha_Banco = ibase_fetch_row( $Ds_Retorno ) )
{
    $Arr_Dados[] = $Ds_Linha_Banco;
}
 
var_dump($Arr_Dados);*/


/*abstract class Conexao {
	protected $db;

	protected function __construct() {
		$par = "mysql:host=192.168.0.3:D:\Projetos\DATABASE\DATABASE.v.ACAI DA BARRA\00DASHBOARD\DATABASE.FDB;dbname=DASHBOARD;charset=WIN1252";
		try {
			$this->db = new PDO($par,"root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e) {
			//die($e->getMessage());
			die("Erro de conexao com o banco de dados");
		}
	}
}*/

