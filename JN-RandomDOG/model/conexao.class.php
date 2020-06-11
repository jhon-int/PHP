<?php
	abstract class conexao {
		protected $db;
		
		protected function __construct() {
			$par="mysql:host=localhost;dbname=jn;charset=utf8mb4";
			
			try {
				$this->db = new PDO($par, "root", "");
			}
			catch ( Exception $e ) {
				die ($e->getMessage());
			}
		}//método construtor
	}//classe
?>