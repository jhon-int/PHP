<?php  
	class lugares{
		private $idlugar;
		private $nome;
		private $latitude;
		private $longitude;


		public function __construct($idlugar, $nome, $latitude, $longitude){
			$this->idlugar = $idlugar;
			$this->nome = $nome;
			$this->latitude = $latitude;
			$this->longitude = $longitude;
		}

	    public function getIdlugar()
	    {
	        return $this->idlugar;
	    }

	    public function setIdlugar($idlugar)
	    {
	        $this->idlugar = $idlugar;

	        return $this;
	    }

	    public function getNome()
	    {
	        return $this->nome;
	    }

	    public function setNome($nome)
	    {
	        $this->nome = $nome;

	        return $this;
	    }

	    public function getLatitude()
	    {
	        return $this->latitude;
	    }

	    public function setLatitude($latitude)
	    {
	        $this->latitude = $latitude;

	        return $this;
	    }

	    public function getLongitude()
	    {
	        return $this->longitude;
	    }

	    public function setLongitude($longitude)
	    {
	        $this->longitude = $longitude;

	        return $this;
	    }
	}

?>