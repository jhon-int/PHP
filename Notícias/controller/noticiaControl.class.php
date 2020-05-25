<?php
    require_once "model/Conexao.class.php";
    require_once "model/NoticiaDAO.class.php";
    require_once "model/Noticia.class.php";

    class noticiaControl {

        function postControl() {

            include "lib/nusoap.php";

            if (isset($_GET["id"])) {
                $client = new nusoap_client("http://localhost/FatecNews/services/noticiaService.class.php?wsdl");
               	$parametros = array("idnoticia" => $_GET["id"]);
                $ret = $client->call("noticiaService.listarNoticiaIdService", $parametros);
                $ret = json_decode($ret, true);

                require_once "view/Post.php";
            }
        }

        function navControl() {

            if (isset($_GET["id"])) {

                include "lib/nusoap.php";

                if (isset($_GET["id"])) {
                    $client = new nusoap_client("http://localhost/FatecNews/services/noticiaService.class.php?wsdl");
                    $parametros = array("idnoticia" => $_GET["id"]);
                    $ret = $client->call("noticiaService.listarNoticiaCursoIdService", $parametros);
                    $ret = json_decode($ret, true);

                    require_once "view/Index.php";
                }

                //SOAP
                // $opcao = array("location"=>"http://localhost/FatecNews/services/noticiaServico.class.php","uri"=>"http://localhost");
                // $client = new SoapClient(null, $opcao);
                // $ret = $client->consultarNoticias();

                // require_once "view/Post.php";
            }
        }
    }
?>