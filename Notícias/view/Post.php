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
			<h1 class="mt-4 mb-3"><?php echo $noticia["descricao_titulo"]; ?></h1><br>
			<div class="row">
				<!-- Post Content Column -->
				<div class="col-lg-8">
					<!-- Preview Image -->
					<img class="img-fluid rounded" src="image/<?php echo $noticia['imagem_post']; ?>" alt=""><hr>
					<p class="lead"><?php echo $noticia["descricao_completa"]; ?></p>
					<hr><p style="text-align: center;">Posted</p><hr>
				</div>
				
			<?php endforeach ?>

				<div class="col-md-4">
					<div class="card mb-4">
						<h5 class="card-header">Search</h5>
						<div class="card-body">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-secondary" type="button">Go!</button>
								</span>
							</div>
						</div>
					</div>
					<div class="card my-4">
						<h5 class="card-header">Categories</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="#">Web Design</a>
										</li>
										<li>
											<a href="#">HTML</a>
										</li>
										<li>
											<a href="#">Freebies</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="#">JavaScript</a>
										</li>
										<li>
											<a href="#">CSS</a>
										</li>
										<li>
											<a href="#">Tutorials</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php include "footer.php"; ?>
	</body>
</html>