<?php
	class Genero
	{
		private $id;
		private $descricao;

		public function __construct($id="", $descricao="")
		{
			$this->id = $id;
			$this->descricao = $descricao;
		}

	    public function getId()
	    {
	        return $this->id;
	    }

	    public function setId($id)
	    {
	        $this->id = $id;

	        return $this;
	    }

	    public function getDescricao()
	    {
	        return $this->descricao;
	    }

	    public function setDescricao($descricao)
	    {
	        $this->descricao = $descricao;

	        return $this;
	    }
	}
?>