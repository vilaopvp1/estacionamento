<?php
session_start();
include_once("conexao.php");

//Definindo variaveis
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


//Apagando veiculos
$apgveiculo= "DELETE FROM veiculos WHERE ID = '$id' ";
$apgdveiculo = mysqli_query($conn, $apgveiculo);


//Obtendo resultado do delet
if(mysqli_affected_rows($conn)){
  $_SESSION['msg'] = "<p style='color:BLUE;'>Veiculo removido</p>";
  header("Location: saida.php");
}else{
  $_SESSION['msg'] = "<p style='color:BLUE;'>Erro, veiculo não removido</p>";
  header("Location: saida.php");
}

?>