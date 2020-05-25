<br><br><br><br>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; <a href="about.html">Jhow&Rafa Fatec.</a> 2018</p>
    </div>
    <div class="container">
        <?php
		    $ParametroPesquisa = "getUltimoValorXML";
		    $Moeda = "1";
		    ini_set("soap.wsdl_cache_enabled", "0");
		    $WsSOAP = new SoapClient("https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl");
		    $DadosParaPesquisa = array(
		        "in0" => "$Moeda"
		    );
		    try {
		        $ResultadoPesquisaWS = $WsSOAP->$ParametroPesquisa($DadosParaPesquisa);
		        
		        if (isset($ResultadoPesquisaWS)) {
		            $CotacaoMoedaWS = simplexml_load_string($ResultadoPesquisaWS);
		            $ValorMoeda = $CotacaoMoedaWS->SERIE->VALOR;
		            $DiaCotacaoMoeda = $CotacaoMoedaWS->SERIE->DATA->DIA;
		            $MesCotacaoMoeda = $CotacaoMoedaWS->SERIE->DATA->MES;
		            $AnoCotacaoMoeda = $CotacaoMoedaWS->SERIE->DATA->ANO;
		            echo "<hr/><h4 style='color:white;'>Dolar: $1 equivale à R$ {$ValorMoeda}</h4>";
		            echo "<br/><h4 style='color:white;'>Dia da Cotação: $DiaCotacaoMoeda/$MesCotacaoMoeda/$AnoCotacaoMoeda</h4>";
		        } else {
		            exit('Falha ao abrir XML do BCB.');
		        }
		    } catch (Exception $Exception) {
		        echo "ERRO AO REALIZAR A CAPTURA DE DADOS DO WEBSERVICE: " . $Exception->getMessage();
		    }
		?>
    </div>
    <!-- /.container -->
</footer>