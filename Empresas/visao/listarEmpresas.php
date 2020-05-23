<!doctype html>
<html>
	<head>
		<title>Empresas</title>
	</head>
	<body>
		<table border="1">
			<th>CNPJ</th>
			<th>Nome</th>
			<th>Nome Fantasia</th>
			<th>e-Mail</th>
			<th>Atividade</th>
			<th>Municipio</th>
			<th>UF</th>
			<th>Data Abertura</th>
			<th>Natureza Jurídica</th>
			<th>Capital Social</th>
			<th>Situação</th>
		<?php
			foreach($retorno as $dado) {
				echo "<tr>";
				echo "<td>{$dado->cnpj}</td>"; 
				echo "<td>{$dado->nome}</td>";
				echo "<td>{$dado->nomeFantasia}</td>";
				echo "<td>{$dado->email}</td>";
				echo "<td>{$dado->atividadePrincipal}</td>";
				echo "<td>{$dado->municipio}</td>";
				echo "<td>{$dado->uf}</td>";
				echo "<td>{$dado->dataAbertura}</td>";
				echo "<td>{$dado->naturezaJuridica}</td>";
				echo "<td>{$dado->capitalSocial}</td>";
				echo "<td>{$dado->situacao}</td>";
				echo "</tr>";
			}
		?>
		</table>
</body>
</html>