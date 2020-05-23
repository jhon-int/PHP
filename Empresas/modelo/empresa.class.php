<?php
	class empresa
	{
		private $idempresa;
		private $cnpj;
		private $nome;
		private $nomeFantasia;
		private $email;
		private $atividadePrincipal;
		private $municipio;
		private $uf;
		private $dataAbertura;
		private $naturezaJuridica;
		private $capitalSocial;
		private $situacao;
		
		function __construct($id=null, $cnpj=null, $nome=null, $fantasia=null, $email=null, $atividade=null, $municipio=null, $uf = null, $abertura=null, $natureza=null, $capital=null, $situacao=null)
		{
			$this->idempresa = $id;
			$this->cnpj = $cnpj;
			$this->nome = $nome;
			$this->nomeFantasia = $fantasia;
			$this->email = $email;
			$this->atividadePrincipal = $atividade;
			$this->municipio = $municipio;
			$this->uf = $uf;
			$this->dataAbertura = $abertura;
			$this->naturezaJuridica= $natureza;
			$this->capitalSocial = $capital;
			$this->situacao = $situacao;
		}
		function getId()
		{
			return $this->idEmpresa;
		}
		
		function getCNPJ()
		{
			return $this->cnpj;
		}
		function getNome()
		{
			return $this->nome;
		}
		function getFantasia()
		{
			return $this->nomeFantasia;
		}
		function getEmail()
		{
			return $this->email;
		}
		function getAtividade()
		{
			return $this->atividadePrincipal;
		}
		function getMunicipio()
		{
			return $this->municipio;
		}
		function getUF()
		{
			return $this->uf;
		}
		function getAbertura()
		{
			return $this->dataAbertura;
		}
		function getNatureza()
		{
			return $this->naturezaJuridica;
		}
		function getCapital()
		{
			return $this->capitalSocial;
		}
		function getSituacao()
		{
			return $this->situacao;
		}
		
	}
?>