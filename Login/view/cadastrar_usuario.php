<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar</title>
        <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="view/css/modern-business.css" rel="stylesheet">
        <script src="view/vendor/jquery/jquery.min.js"></script>
        <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="view/js/mascara.js"></script>
    </head>
    <body class="col-md-4"><br>
        <div class="account-container">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title">Cadastrar</h4>
                    <form action="#" method="POST">
                        <div class="field mb-3">
                            <label>CNPJ:</label>
                            <input type="text" class="form-control" id="lastname" name="cnpj"  placeholder="11.111.111/1111-11"  required="required" onkeydown="javascript: fMasc( this, mCNPJ );" minlength ="18" maxlength="18"/>
                        </div>
                        <div class="field mb-3">
                            <label>Nome:</label>
                            <input type="text" class="form-control" id="inputnome4" name="nome" placeholder="Digite seu nome" required="required">
                        </div>
                        <div class="field mb-3">
                            <label>Celular:</label>
                            <input type="text" class="form-control" id="celular" name="celular" value="" placeholder="(11)11111-1111" onkeydown="javascript: fMasc( this, mTel );"  required="required" maxlength="14"/>
                        </div>
                        <div class="field mb-3">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="FirstSoftwares.bb@gmail.com" class="login" required="email"/>
                        </div>
                        <div class="field mb-3">
                            <label>Senha:</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="********">
                        </div>
                        <div class="field mb-3">
                            <label> Confirma Senha:</label>
                            <input type="password" class="form-control" id="inputPassword4" name="consenha" placeholder="********">
                        </div>
                        <!-- <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Endereço:</label>
                                <input type="text" class="form-control" id="inputAddress" name="logradouro" placeholder="Endereço">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Numero:</label>
                                <input type="text" id="numero" name="numero" value="" placeholder="Nº" class="form-control" onkeydown="javascript: fMasc( this, mNum );"  required="required" maxlength="5"/>         
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bairro:</label>
                                <input type="text" class="form-control" id="inputCEP" name="bairro" placeholder="Bairro">
                            </div>
                            <div class="form-group col-md-6">
                                <label>CEP:</label>
                                <input type="text" class="form-control" placeholder="CEP" onkeydown="javascript: fMasc( this, mCEP );"name="cep" id="inputCEP">
                            </div>
                            </div> -->
                        <div class="field mb-3">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                </article>
            </div>
        </div>
        </form>
    </body>
</html>