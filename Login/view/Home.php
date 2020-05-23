<?php
	if(!isset($_SESSION)) {
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="view/css/modern-business.css" rel="stylesheet">
        <script src="view/vendor/jquery/jquery.min.js"></script>
        <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="col-md-4"><br>
	 <?php
		if($_SESSION)
			echo "<a class='info-input btn btn-danger' href='index.php?controller=loginController&metodo=logout'>Sair</a>";
		else {
			echo "<a class='info-input btn btn-primary' href='index.php?controller=loginController&metodo=login'>Entrar</a> ";
			echo "<a class='info-input btn btn-success' href='index.php?controller=usuarioController&metodo=cadastrar_usuario'>Cadastro</a>";
		}	
	?> 
	<!-- <a class="info-input btn btn-primary" href="index.php?controller=loginController&metodo=login">Entrar</a> -->
</body>
</html>