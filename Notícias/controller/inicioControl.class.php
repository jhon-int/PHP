<?php
    class inicioControl {

        function inicio() {
            require_once "model/Conexao.class.php";
            require_once "model/Noticia.class.php";
            require_once "model/NoticiaDAO.class.php";
            
            include "lib/nusoap.php";
            
            $client = new nusoap_client("http://localhost/FatecNews/services/noticiaService.class.php?wsdl");
            $ret = $client->call("noticiaService.listarNoticiaService");
            $ret = json_decode($ret, true);
            
            $curl = file_get_contents("http://apiadvisor.climatempo.com.br/api/v1/weather/locale/3866/current?token=759a8a497297d938d509e15c8513fb8a");
            $c = json_decode($curl);
            
            $ParametroPesquisa = "getUltimoValorXML";
            $Moeda = "1";
            ini_set("soap.wsdl_cache_enabled", "0");
            $WsSOAP = new SoapClient("https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl");
            $DadosParaPesquisa = array("in0" => "$Moeda");

            try {
                $ResultadoPesquisaWS = $WsSOAP->$ParametroPesquisa($DadosParaPesquisa);
                
                if (isset($ResultadoPesquisaWS)) {
                    $CotacaoMoedaWS = simplexml_load_string($ResultadoPesquisaWS);
                    $ValorMoeda = $CotacaoMoedaWS->SERIE->VALOR;
                    $DiaCotacaoMoeda = $CotacaoMoedaWS->SERIE->DATA->DIA;
                    $MesCotacaoMoeda = $CotacaoMoedaWS->SERIE->DATA->MES;
                    $AnoCotacaoMoeda = $CotacaoMoedaWS->SERIE->DATA->ANO;
                    
                    require_once "view/index.php";
                } else {
                    exit('Falha ao abrir XML do BCB.');
                }
            } catch (Exception $Exception) {
                echo "ERRO AO REALIZAR A CAPTURA DE DADOS DO WEBSERVICE: " . $Exception->getMessage();
            }

            require_once "view/index.php";
        }
    }
?>