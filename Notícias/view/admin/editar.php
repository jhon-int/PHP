<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION["logged"])) {
        header("location: login.php");
        //echo "aa";
    }

	/*require_once "../../model/Conexao.class.php";
	require_once "../../model/NoticiaDAO.class.php";
	require_once "../../model/CursoDAO.class.php";
	require_once "../../model/Noticia.class.php";*/

	if ($_GET) {

		$get = $_GET;
		$id = $get['id'];

		$noticia = new Noticia($id);
		$conn = new NoticiaDAO();

		$noticias = $conn->post($noticia);  
	}

	if ($_POST) {
	   $noticia = new Noticia($_POST["id"], $_POST["titulo"],$_POST["brevDesc"],$_POST["notCompl"],$_POST["categoria"], $_FILES['file_index'], $_FILES['file_post']);
		$notDAO = new NoticiaDAO();
		$notDAO->edit($noticia);
		header("location: home.php");
	}

	$conn = new CursoDAO();

	$cursos = $conn->allCursos();

	include "header.php";
?>
			<h1 class="mt-4 mb-3">Administração </h1>
			<div class="row">
				<?php include "sidbar.php"; ?>

				<div class="col-lg-9 mb-4">
					<h2>Editar NEWS</h2><hr>
					<form enctype="multipart/form-data" action="#" method="POST">
						<input type="hidden" name="id" value="<?php echo $noticias[0]->id_noticia; ?>">
						<div class="form-group">
							<label for="inputText">Titulo:</label>
							<input type="text" class="form-control" name="titulo" aria-describedby="textHelp" value="<?php echo $noticias[0]->descricao_titulo; ?>" placeholder="Digite o titulo da notica!">
							<small id="textHelp" class="form-text text-muted">Digite o titulo da noticia.</small>
						</div>
						<div class="form-group">
							<label for="exampleDescricao">Breve descricao da noticia:</label>
							<textarea class="form-control" name="brevDesc" rows="2" placeholder="Digite uma sinopse da noticia"><?php echo $noticias[0]->descricao_resumida; ?></textarea>
						</div>
						<div class="form-group">
							<label for="exampleSelect1">Curso ou Outros:</label>
							<select class="form-control" name="categoria">
								<?php foreach ($cursos as $curso): ?>
									<?php if ($noticias[0]->id_noticia_tipo == $curso->id_noticia_tipo): ?>
										<option selected value="<?php echo $curso->id_noticia_tipo; ?>"><?php echo $curso->descricao; ?></option>
									<?php else: ?>  
										<option value="<?php echo $curso->id_noticia_tipo; ?>"><?php echo $curso->descricao; ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleTextarea">Noticia:</label>
							<textarea class="form-control" name="notCompl" rows="15" placeholder="Digite toda a noticia"><?php echo $noticias[0]->descricao_completa; ?></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputFile1">Escolha imagem para o Index -> 700x400</label>
							<input type="file" class="form-control-file" name="file_index" id="exampleInputFile1" aria-describedby="fileHelp">
							<small id="fileHelp" class="form-text text-muted">Tamanho da imagem do index  700x400.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Escolha imagem para o POST -> 900x300</label>
							<input type="file" class="form-control-file" name="file_post" id="exampleInputFile" aria-describedby="fileHelp">
							<small id="fileHelp" class="form-text text-muted">Tamanho da imagem do POST 900x300.</small>
						</div>
						<button type="submit" class="btn btn-primary">Salvar!</button>
					</form>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php include "view/footer.php"; ?>
	</body>
</html>
