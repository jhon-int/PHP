<?php
    if(!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/login.css" rel="stylesheet">
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/jquery/login.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="../../index.php?controle=adminControl&metodo=verifyUser" method="POST"> 
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mail" required autofocus>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="********" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                </form><!-- /form -->
                <div><a href="../index.php">Ir Para o Site</a></div>
            </div><!-- /card-container -->
        </div><!-- /container -->
    </body> 
</html>