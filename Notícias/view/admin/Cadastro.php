<?php 
	require_once "model/Conexao.class.php";
	require_once "model/UsuarioDAO.class.php";
	require_once "model/Usuario.class.php";

	if ($_POST) {
		
		if ($_POST["login"] !="" && $_POST["nome"] !="" && $_POST["email"] !="" && $_POST["senha"] !="") 
		{
      $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);
			$Usuario = new Usuario(null,$_POST["login"],$_POST["nome"],$_POST["email"], $senha);
			$UsuarioDAO = new UsuarioDAO();
			$UsuarioDAO->Inserir($Usuario);
      header("location:login.php");
		}
		else
		{
			echo "
				<script>
					alert('Prencha o formulario');
				</script>
			";
		}
	}

?>
<?php include "header.php" ?>

    <!-- body e div container esta no HEADER.PHP -->


      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Administração <i class="fa fa-suitcase" style="font-size:36px"></i></h1>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
          <?php include "sidbar.php"; ?>

        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
          <h2>Cadastro</h2>
          <hr>
           <form action="#" method="POST">

                <div class="form-group">
                  <label for="login1">Login:</label>
                  <input type="text" id="login1" class="form-control" name="login" aria-describedby="textHelp" placeholder="Digite seu login!">
                </div>

                <div class="form-group">
                  <label for="nome1">Nome:</label>
                  <input type="text" id="nome1" class="form-control" name="nome" aria-describedby="textHelp" placeholder="Digite o nome e sobrenome!">
                </div>

                <div class="form-group">
                  <label for="email1">Email:</label>
                  <input type="email" id="email1" class="form-control" name="email" aria-describedby="textHelp" placeholder="example@example.com">
                </div>

                <div class="form-group">
                  <label for="senha1">Senha:</label>
                  <input type="password" id="senha1" class="form-control" name="senha" aria-describedby="textHelp">
                </div>
        

                <button type="submit" class="btn btn-primary">Cadastrar!</button>
          </form>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
     <?php include "view/footer.php"; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
