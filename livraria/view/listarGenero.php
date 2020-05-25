<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Genero</title>
</head>
<body>
	<h1>Genero</h1>
	<table border="1px">
		<thead>
			<tr>
				<th>Descricao</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				if (count($ret) > 0) {
					foreach ($ret as $dados) {
						echo "<tr>";
						echo "<td>{$dados->descricao}</td>";	
						echo "<td><a href='index.php?controle=generoControl&metodo=excluir&id=$dados->idgenero'>Exluir</a></td>";
						echo "</tr>";
					}
				} else {
					echo "Não a genero cadastrado!";
				}
			?>
		</tbody>
	</table>
	<a href="index.php?controle=generoControl&metodo=inserir">Novo Gênero</a>
</body>
</html>