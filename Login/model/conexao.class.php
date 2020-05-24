<?php 
$hostname = "C:/diretorio/banco.FDB";
$usuario = "root"; 
$senha = "";
$database = "usuario"; 

var_dump($hostname);
var_dump($usuario);
var_dump($senha);
var_dump($database);
 
$conexao = mysqli_connect($hostname, $usuario, $senha, $database);

var_dump($conexao);
die;