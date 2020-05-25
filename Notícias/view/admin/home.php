	<?php include "header.php"; ?>
		<h1 class="mt-4 mb-3">Administração <i class="fa fa-suitcase" style="font-size:36px"></i></h1>
			<div class="row">

		<?php if (isset($_SESSION)) { ?>

				<!-- Sidebar Column -->
				<?php include "sidbar.php"; ?> 

				<div class="col-lg-9 mb-4">
					<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Titulo</th>
									<th scope="col">Editar</th>
									<th scope="col">Deletar</th> 
								</tr>
							</thead>
							<tbody>
								<?php foreach ($ret as $noticia ): ?>
									<tr>
										<th scope="row"><?php echo $noticia->id_noticia; ?></th>
										<td><?php echo $noticia->descricao_titulo; ?></td>
										<td><a href="index.php?controle=adminControl&metodo=editar&id=<?php echo $noticia->id_noticia; ?>"><button type="button" class="btn btn-primary">Editar <i class="fa fa-pencil"></i></button></a></td>
										<td><a href="index.php?controle=adminControl&metodo=deletar&id=<?php echo $noticia->id_noticia; ?>"><button type="button" class="btn btn-danger">Deletar <i class="fa fa-remove"></i></button></a></td>
									</tr>
								<?php endforeach ?>
							</tbody>
					</table>
				</div>
			</div>
		</div> <!-- body e div container esta no HEADER.PHP -->

		<!-- Footer -->
		<?php include "view/footer.php"; } ?>
	</body>
</html>