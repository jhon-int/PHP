<?php
    if(!isset($_SESSION)) {
        session_start();
        ob_start();
    }

    /*if (!isset($_SESSION["logged"])) {
        header("location: login.php");
        //echo "aa";
    }*/
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Fatec News Admin</title> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/modern-business.css" rel="stylesheet">
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/modern-business.css" rel="stylesheet">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      </head>
      <body>
        <div class="container">
            <?php
                if($_SESSION)
                    echo "<a class='info-input btn btn-primary' href='index.php?controle=adminControl&metodo=logout'>Sair</a>";
                else {
                    echo "<a class='info-input btn btn-primary' href='../../index.php?controle=adminControl&metodo=verifyUser'>Entrar</a> ";
                }    
            ?> 
            <!-- <a href="logout.php"><button type="button" class="btn">Logout <i class="fa fa-power-off" aria-hidden="true"></i></button></a> -->

