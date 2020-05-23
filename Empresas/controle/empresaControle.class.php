<?php
	require_once "lib/nusoap.php";

	class empresaControle { 
		
		function buscar() {
			//chamar o serviço nusoap
			$client = new nusoap_client("http://localhost/Exercicio/empresas/servicos/empresaService.class.php?wsdl");
			$retorno = $client->call("empresaService.BuscarEmpresas");
			$retorno = json_decode($retorno);
			require_once "visao/listarEmpresas.php";
		}//buscar
		
		function inserir() {
			//mostrar a visao
			require_once "visao/cadastrarEmpresas.php";
			if($_POST) {
				//acessar o serviço externo
				$resultado = file_get_contents('https://www.receitaws.com.br/v1/cnpj/'.$_POST["cnpj"]);  
 				$resultado = json_decode($resultado, true);

 				if (isset($resultado)) {
 					//obter os dados e acessar seu serviço rest para inserir no BD
					$curl = curl_init("http://localhost/Exercicio/empresas/servicos/empresaServiceRest.class.php");

					$dados = array("cnpj"=>$resultado["cnpj"], "nome"=>$resultado["nome"], "fantasia"=>$resultado["fantasia"], "email"=>$resultado["email"], "atividade_principal"=>$resultado["atividade_principal"][0]["text"], "municipio"=>$resultado["municipio"], "uf"=>$resultado["uf"], "abertura"=>$resultado["abertura"], "natureza_juridica"=>$resultado["natureza_juridica"], "capital_social"=>$resultado["capital_social"], "situacao"=>$resultado["situacao"]);

					curl_setopt($curl, CURLOPT_POST, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
					curl_exec($curl);
					curl_close($curl);
 				}
			}
		}//inserir
	}//class
?>