<?php
	class inicioControle {

		function inicio() {
			
			header("location: index.php?controle=linksControle&metodo=CarregarPagina");
		}
	}
?>