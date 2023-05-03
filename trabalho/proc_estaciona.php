<?php
session_start();
include_once("conexao.php");

//Obtendo e setando variaveis
$placa = $_POST['placa']; 
$data = $_POST['data'];
$entrada = $_POST['horario'];
$vaga = $_POST['vaga'];
$placa = preg_replace( '/[^a-zA-Z0-9_]/is', '', $placa );
$verificavaga = "SELECT * FROM veiculos WHERE vaga = '$vaga'";
$result = mysqli_query($conn, $verificavaga);
$row = mysqli_num_rows($result);

//Validando placa
function valida_placa( $placa = false ) {

 $regex = '/[A-Z]{3}[0-9][0-9A-Z][0-9]{2}/';


  if (preg_match($regex, $placa) === 1) {
    return true;
  }else {
    return false;
  };
};

//Verificando resultado da validação e cadastrando veiculo
if(valida_placa($placa)){
  if($row == 0){
    $cad_veiculo = "INSERT INTO veiculos (placa, entrada, vaga) values ('$placa', '$entrada', '$vaga')";
    $cadastro_veiculo = mysqli_query($conn, $cad_veiculo);
    if (mysqli_insert_id($conn)){
      $_SESSION['msg'] = "<p style='color:blue;'>Entrada registrada.</p>";
      header("location: cadastrarv.php");
      echo $row;
      $_SESSION['entradas'] = $_SESSION['entradas'] + 1;
    } else {
      $_SESSION['msg'] = "<p style='color:red;'>Entrada não registrada.</p>";
      header("Location: cadastrarv.php");
    };
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Vaga ocupada.</p>";
    header("Location: cadastrarv.php");
  }
  
}else{
  $_SESSION['msg'] = "<p style='color:red;'>Placa inválida.</p>";
  header("Location: cadastrarv.php");
}


?>