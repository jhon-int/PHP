<?php 
	require_once "../../model/Conexao.class.php";
    require_once "../../model/NoticiaDAO.class.php";
	require_once "../../model/Noticia.class.php";

  
    if ($_GET) {

        $get = $_GET;
        $id = $get['id'];

        $noticia = new Noticia($id);
        $conn = new NoticiaDAO();


        $noticias = $conn->destroy($noticia); 

        header("location: home.php"); 
    }