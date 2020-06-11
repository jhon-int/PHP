<?php
     class linksControle {

        function CarregarPagina() {

            //Inserir no banco os links
        	if($_POST) {

                if(!empty($_POST["descricao"])) {
                    $descricao = urlencode($_POST["descricao"]);
                    $url = urlencode($_POST["url"]);
                    $url = "http://localhost/JN-RandomDOG/service/linksServico.class.php?oper=inserir&descricao=$descricao&url=$url";
                    file_get_contents($url);
                }
        	}

        	if($_GET) {

        		$ret = json_decode(file_get_contents('https://random.dog/woof.json')); 	
        	}

        	require_once"view/Home.php";
        }

        function CarregarListagem() {

			$ret = json_decode(file_get_contents("http://localhost/JN-RandomDOG/service/linksServico.class.php?oper=buscar"));

			require_once "view/Listagem.php";
		}

        function Excluir() {

            if ($_GET) {
                
                $id = urlencode($_GET['id']);

                $ret = json_decode(file_get_contents("http://localhost/JN-RandomDOG/service/linksServico.class.php?oper=excluir&id=$id"));

                header('location:index.php?controle=linksControle&metodo=CarregarListagem');
            }
        }

        function Editar() {

            if ($_GET) { 
                
                $id = urlencode($_GET['id']);

                $ret = json_decode(file_get_contents("http://localhost/JN-RandomDOG/service/linksServico.class.php?oper=buscarLink&id=$id"));

                require_once "view/Listagem_Editar.php";
            }

            if ($_POST) {

                $id = urlencode($_POST['id']);
                $descricao = urlencode($_POST["descricao"]);

                $ret = file_get_contents("http://localhost/JN-RandomDOG/service/linksServico.class.php?oper=editar&id=$id&descricao=$descricao");

                header('location:index.php?controle=linksControle&metodo=CarregarListagem');
            }
        }

    }
?>