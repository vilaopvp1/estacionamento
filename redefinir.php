<?php 
session_start();
include_once("conexao.php");
//Setando os dados como 0 para redefinir a acumulação
$_SESSION['total'] = 0;
$_SESSION['entradas'] = 0;

//redefinindo banco de dados
$redefinir_v = "DELETE FROM veiculos";
$redefinirvei = mysqli_query($conn, $redefinir_v);

//Voltando para a pagina anterior com resultado
$_SESSION['msg'] = "<p style='color:blue;'>Dados redefinidos com sucesso.</p>";
header("location: relatorio.php");


?>