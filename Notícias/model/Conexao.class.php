<?php 
 class Conexao {
	protected $db;

	private $clausules = [];

	public function __construct() {
		$par="mysql:host=localhost;dbname=fatec_news;charset=utf8mb4";
		try
		{
			$this->db = new PDO($par,"root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			//die ($e->getMessage());
			die ("Erro de conexão com o Banco de Dados");
		}
	}//metodo construtor

	public function fields(array $fields) {
		$this->clausules['fields'] = $fields;

		return $this;
	}

	public function table($table) { 
		$this->clausules['table'] = $table;

		return $this;
	}

	public function where($where) {
		$this->clausules['where'] = $where;

		return $this;
	}

	public function join($table, $param) {

		$this->clausules['join']['table'] = $table;
		$this->clausules['join']['param'] = $param;

		return $this;
	}

	public function order($order) {
		$this->clausules['order'] = $order;

		return $this;
	}

	public function limit($limit) {
		$this->clausules['limit'] = $limit;

		return $this;
	}

	public function insert($values = []) {	
		$_fields = implode(", ", $this->clausules['fields']);

		$query[] = "INSERT INTO";
		$query[] = $this->clausules['table'];
		$query[] = "( " . $_fields . " )";
		$query[] = "VALUES";
		$query[] = "(";

			$placeholders = array_map(function(){
				return "?";
			}, $values); 

			$_placeholders = implode(", ",$placeholders);

			$query[] = $_placeholders;

		$query[] = ")";

		$sql = implode(" ",$query);

		return $this->executeInsert($sql, $values);
	}

	public function update($values = []) {
		// id_categoria, id_blabla, bleble
		$_fields = $this->clausules['fields'];

		$query[] = "UPDATE";
		$query[] = $this->clausules['table'];
		$query[] = "SET";

		// [id_categoria, id_blabla, bleble]
		$sets = $_fields;

		if (is_array($_fields)) {
			$sets = implode(', ', array_map(function($value) {
				return $value . ' = ?';
			}, $_fields));
		}

		$query[] = $sets;
		$query[] = $this->testClausules();

		$sql = implode(" ",$query);

		return $this->executeUpdate($sql, $values);
	}

	public function select($values = []) {
		
		// transforma o array de campos em string separando por ,
		$_fields = implode(",", $this->clausules['fields']);

		$query[] = "SELECT";
		$query[] = $_fields;
		$query[] = "FROM";
		$query[] = $this->clausules['table'];

		if (isset($this->clausules['join'])) {
			$query[] = "INNER JOIN " . $this->clausules['join']['table'];
			$query[] = "ON " . $this->clausules['join']['param'];
		}

		$query[] = $this->testClausules();

		// Transforma as query[] em uma string sql
		$sql = implode(" ", $query);

		return $this->executeSelect($sql, $values);
	}

	public function delete($values = []) {
		$query[] = "DELETE FROM";
		$query[] = $this->clausules['table'];
		$query[] = $this->testClausules();

		$sql = implode(" ", $query);

		return $this->executeDelete($sql, $values);
	}

	private function executeSelect($sql, $values) {
		try {

			$stmt = $this->db->prepare($sql);
			$stmt->execute($values);

			$this->clear();

			return $stmt->fetchAll(PDO::FETCH_OBJ);

		} catch (PDOException $e) {

			die("Error: " . $e->getMessage());

		}	
	}

	private function executeInsert($sql, $values) {
		try {
			
			$stmt = $this->db->prepare($sql);
			$stmt->execute($values);

			$this->clear();

			return $this->db->lastInsertId();

		} catch (PDOException $e) {

			die("Error: " . $e->getMessage());
			
		}
	}//fim do insert

	private function executeUpdate($sql, $values) {
		try {
			
			$stmt = $this->db->prepare($sql);
			$stmt->execute($values);

			$this->clear();

			return true;

		} catch (PDOException $e) {

			die("Error: " . $e->getMessage());
			
		}
	}//fim do insert

	private function executeDelete($sql, $values) {
		try {
			
			$stmt = $this->db->prepare($sql);
			$stmt->execute($values);

			$this->clear();

			return true;

		} catch (PDOException $e) {

			die("Error: " . $e->getMessage());
			
		}
	}//fim do delete

	private function clear() {
		return $this->clausules = [];
	}

	private function testClausules() {
		$clausules = [
			'where' => [
				'instruction' => 'WHERE',
			],
			'order' => [
				'instruction' => 'ORDER BY',
			],            
			'limit' => [
				'instruction' => 'LIMIT',
			],
		];

		$command = [];

		if (count($this->clausules)) {

			foreach ($this->clausules as $key => $value) {

				if (isset($clausules[$key])) {
				
					$command[] = $clausules[$key]['instruction'] . ' ' . $value;
			
				}

			}
		}

		if (count($command) > 0) {
			$clausule = implode(" ", $command);
		} else {
			return null;
		}

		return $clausule;
	}
}//classe
