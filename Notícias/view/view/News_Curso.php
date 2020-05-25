<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>News - Nome Da Noticia</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<!-- Navigation -->
		<?php include "nav.php"; ?>

		<div class="container">

			<?php foreach ($ret as $noticia): ?>
				<div class="col-lg-4 col-sm-6 portfolio-item">
				  <div class="card h-100">
				      <div class="card-body">
				          <h4 class="card-title"><?php echo $noticia["descricao_titulo"]; ?></h4>
				          <p class="card-text"><?php echo $noticia["descricao_resumida"]; ?></p>
				          <a href="index.php?controle=noticiaControl&metodo=postControl&id=<?php echo $noticia['id_noticia']; ?>" class="btn btn-primary" target="_blank">Leia Mais <i class="fa fa-external-link"></i></a>
				      </div>
				      <div class="card-footer text-muted">
				          Postado:  
				      </div>
				  </div>
				</div>

			<?php endforeach ?>

			
		</div>

		<!-- Footer -->
		<?php include "footer.php"; ?>
	</body>
</html>