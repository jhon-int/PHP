<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Fatec News</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/modern-business.css" rel="stylesheet">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Navigation -->
        <?php include "nav.php"; 
            if (!isset($_GET['id'])) {
        ?>
            <header>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="background-image: url('image/wallpaper_Fatec.png')">
                            <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                        <div class="carousel-item" style="background-image: url('image/teste1.jpg')">
                            <div class="carousel-caption d-none d-md-block">
                                <?php
                                    echo "<h4>Cotação Dolar: R$ {$ValorMoeda}</h4>";
                                    echo "<p>Dia da Cotação: $DiaCotacaoMoeda/$MesCotacaoMoeda/$AnoCotacaoMoeda</p>";
                                ?>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('image/teste2.jpg')">
                            <div class="carousel-caption d-none d-md-block">
                                <?php
                                    echo "<h4>{$c->name}: {$c->data->temperature}°C</h4>";
                                    echo "<p>Sensação Térmica: {$c->data->sensation}°C</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </header>
        <?php } ?>

        <div class="container"><br><br><br>
            <h1 class="my-4">NEWS</h1>
            <div class="row">
                <?php if (!isset($_GET['id'])) { ?>
                    <div class="col-lg-12 col-sm-12 portfolio-item">
                        <div class="card h-100">
                            <div class="card-body">
                                <?php
                                    echo "<h4>{$c->name}: {$c->data->temperature}°C</h4>";
                                    echo "<p>Sensação Térmica: {$c->data->sensation}°C</p><hr>";   
                                    echo "<h6>Cotação Dolar: $1 equivale à R$ {$ValorMoeda} ~~ Dia da Cotação: $DiaCotacaoMoeda/$MesCotacaoMoeda/$AnoCotacaoMoeda</h6>";
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } include "news.php"; ?>
            </div>
        </div>
        <br><br><br><br><br>

        <!-- Footer -->
        <?php include "footer.php"; ?>
    </body>
</html>