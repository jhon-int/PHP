<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1">
        <meta name="description" content="Hello World, This Is Dog">
        <meta name="author" content="AdenFlorian">
        <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>random.dog</title>
        <link rel="icon" href="favicon.ico">
        <style>
            #input-hidden {
            height:0;
            width:0;
            visibility: hidden;
            padding:0;
            margin:0;
            float:right;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br><br>
            <a class="btn btn-danger" href="index.php?controle=linksControle&metodo=CarregarPagina">Home</a>  
            <a class="btn btn-warning" href="index.php?controle=linksControle&metodo=CarregarListagem">Listagem</a> 
            <br><br>
            <div class="row  flex-grid featured-content">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100 grid-item-wrapper">
                        <div class="card">
                            <?php
                                $info = new SplFileInfo($ret->url);
                                
                                if (($info->getExtension() == 'mp4') || ($info->getExtension() == 'webm')) {
                                    echo '<video class="card-img-top grid-item-bg-img" autoplay loop muted>';
                                    echo '  <source src="'.$ret->url.'" type="video/mp4">';
                                    echo '</video>';
                                } 
                                else {
                                    echo '<img class="card-img-top grid-item-bg-img" src="'.$ret->url.'"/>';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 portfolio-item">
                    <div class="h-100 grid-item-wrapper">
                        <form action="#" method="POST">
                            <label>Descrição:</label>
                            <input id="input-hidden" type="text" name="url" value="<?php echo $ret->url; ?>"/>
                            <input type="text" name="descricao" />
                            <input class="btn btn-primary" type="submit" value="Cadastrar" /> 
                            <a class="btn btn-danger" href="index.php?controle=linksControle&metodo=CarregarPagina">Trocar Imagem</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>