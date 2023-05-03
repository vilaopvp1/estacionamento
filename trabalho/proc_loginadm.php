<?php
session_start();
include_once("conexao.php");


//Obtendo dados do forms
$login = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

//Verificando se os dados estão corretos
//Login ADM
$query = "SELECT * FROM acessoadm WHERE usuario = '$login' AND senha = md5('$senha')";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);


//Verificando se o login/senha estão corretos
if($row > 0){
  $_SESSION['msg'] = "<p style='color:blue;'>Login efetuado com sucesso</p>";
  header("Location:  cadastrof.php");
}else{
  $_SESSION['msg'] = "<p style='color:red;'>Login ou senha invalidos</p>";
  header("Location: cadastrarf.php");
}
  

?>