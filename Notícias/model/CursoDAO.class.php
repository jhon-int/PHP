<?php 

class CursoDAO extends Conexao
{
	
	public function __construct()
	{
		parent::__construct();
	}

	function allCursos(){

			$ret = $this->table('noticias_tipos')->fields(['*'])->select();
			return $ret;
		}

}