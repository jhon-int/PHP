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
        <title>Entrar</title>
        <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="view/css/modern-business.css" rel="stylesheet">
        <script src="view/vendor/jquery/jquery.min.js"></script>
        <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="col-md-4"><br>
        <div class="account-container">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title">Entrar</h4>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="field mb-3">
                            <label>Email:</label>
                            <input type="email" id="username" name="email" value="" placeholder="FirstSoftwares.bb@gmail.com" class="form-control"/>
                        </div> 
                        <div class="field mb-3">
                            <label>Senha:</label>
                            <input type="password" id="password" name="senha" value="" placeholder="*********" class="form-control"/>
                        </div>
                        <div class="field mb-3">
                            <input class="info-input btn btn-primary" type="submit" value="Entrar">
                            <a class="info-input btn btn-success" href="index.php?controller=usuarioController&metodo=cadastrar_usuario">Cadastro</a><br><br>
                            <a href="index.php?controller=loginController&metodo=recuperar">Esqueceu a senha?</a>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </body>
</html>