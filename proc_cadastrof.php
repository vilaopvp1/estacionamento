<?php
session_start();
include_once('conexao.php');

//Cadastrando funcionario no banco
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = MD5($_POST['senha']);
$cadastro_funcio = "INSERT INTO acessofun (usuario, senha) values ('$usuario', '$senha')";
$cadas_funcio = mysqli_query($conn, $cadastro_funcio);

//Setando resultado do cadastro
if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:blue;'>Funcionario cadastrado com sucesso.</p>";
    header("location: cadastrof.php");
} else {
    $_SESSION['msg'] = "<p style'color:red;'>Funcionario não foi cadastrado.</p>";
    header("Location: cadastrof.php");
}






?>