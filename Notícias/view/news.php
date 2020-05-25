<!-- Fontes Links Externo -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php foreach ($ret as $noticia): ?>
  <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
          <img class="card-img-top" src="image/<?php echo $noticia['imagem_index']; ?>" alt="">
          <div class="card-body">
              <h4 class="card-title"><?php echo $noticia["descricao_titulo"]; ?></h4>
              <p class="card-text"><?php echo $noticia["descricao_resumida"]; ?></p>
              <a href="index.php?controle=noticiaControl&metodo=postControl&id=<?php echo $noticia['id_noticia']; ?>" class="btn btn-primary" target="_blank">Leia Mais <i class="fa fa-external-link"></i></a>
          </div>
      </div>
  </div>
<?php endforeach ?> 