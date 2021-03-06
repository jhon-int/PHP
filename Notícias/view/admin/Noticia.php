<?php 
    require_once "model/Conexao.class.php";
    require_once "model/NoticiaDAO.class.php";
    require_once "model/CursoDAO.class.php";
    require_once "model/Noticia.class.php"; 

    /*if(!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION["logged"])) {
        header("location: login.php"); 
        //echo "aa";
    }*/
?>
            <?php include "header.php" ?>

            <h1 class="mt-4 mb-3">Administração <i class="fa fa-suitcase" style="font-size:36px"></i></h1>
            <div class="row">

                <?php include "sidbar.php"; ?>

                <div class="col-lg-9 mb-4">
                    <h2>Nova NEWS</h2><hr>
                    <form enctype="multipart/form-data" action="#" method="POST">
                        <div class="form-group">
                            <label for="inputText">Titulo:</label>
                            <input type="text" class="form-control" name="titulo" aria-describedby="textHelp" id="inputText" placeholder="Digite o titulo da notica!">
                            <small id="textHelp" class="form-text text-muted">Digite o titulo da noticia.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleDescricao">Breve descricao da noticia:</label>
                            <textarea class="form-control" id="exampleDescricao" name="brevDesc" rows="2" placeholder="Digite uma sinopse da noticia"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Curso ou Outros:</label>
                            <select class="form-control" id="exampleSelect1" name="categoria">
                                <?php foreach ($cursos as $curso): ?>
                                <option value="<?php echo $curso->id_noticia_tipo; ?>">
                                    <?php echo $curso->descricao; ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Noticia:</label>
                            <textarea class="form-control" name="notCompl" id="exampleTextarea" rows="15" placeholder="Digite toda a noticia"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile1">Escolha imagem para o Index -> 700x400</label>
                            <input type="file" class="form-control-file" name="file_index" id="exampleInputFile1" aria-describedby="fileHelp" accept="image/jpg, image/jpeg, image/png, image/gif, image/bmp">
                            <small id="fileHelp" class="form-text text-muted">Tamanho da imagem do index  700x400.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Escolha imagem para o POST -> 900x300</label>
                            <input type="file" class="form-control-file" name="file_post" id="exampleInputFile" aria-describedby="fileHelp" accept="image/jpg, image/jpeg, image/png, image/gif, image/bmp">
                            <small id="fileHelp" class="form-text text-muted">Tamanho da imagem do POST 900x300.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar!</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include "view/footer.php"; ?>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>