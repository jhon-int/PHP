<?php 
/*
*Açoes de banco de dados(acesso,validaçao,etc)
*@auto original: jason legstorf
*@livro:pro PHP e jQuery
*Arquivo modificado por Vania somaio teixeira
*/
abstract class Conexao
{
	protected $db;

	protected function __construct()
	{
		$par = "mysql:host=localhost;dbname=livraria;charset=utf8mb4";
		try
		{
			$this->db = new PDO($par,"root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			//die($e->getMessage());
			die("Erro de conexao com o banco de dados");
		}
	}// metodo construtor
}//fim da class

