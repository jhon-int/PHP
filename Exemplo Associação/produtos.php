<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>produto</title>
</head>
<body>
    <h1>Produto</h1>
    <form action="#" method="POST">
        <label for="">nome:</label><input type="text" name="nome"><br>
        <label for="">descricao:</label><input type="text" name="descricao"><br>
        <label for="">preco:</label><input type="number" name="preco"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        include 'produtos.class.php';
        if ($_POST){
          $nome = $_POST["nome"];
          $descricao = $_POST["descricao"];
          $preco = $_POST["preco"];

          $produto = new produto($nome,$descricao,$preco);

          echo "<table border='1'>";
          echo "<th>Nome</th>";
          echo"nome: $produto->nome <br/>";
          echo"descricao: $produto->descricao <br />";
          echo"preco: $produto->preco <br/>";
        }
    ?>
</body>
</html>
