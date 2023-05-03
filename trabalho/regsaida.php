<?php
session_start();
include_once("conexao.php");

//Setando variaveis
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$horasaida = "UPDATE veiculos SET saida=now() where id='$id'";
$horav_saida = mysqli_query($conn, $horasaida);
$contah = 0;  
$acumuladorp = 0;
$acumuladort = [];
$msgresult = '';



//Setando hora de entrada
$datasaida = "UPDATE veiculos SET saida=now() where id='$id'";
$datav_saida = mysqli_query($conn, $datasaida);

//Setando hora de saida
$entradah = "SELECT * FROM veiculos where id='$id'";
$entradav = mysqli_query($conn, $entradah);
$row_entrada = mysqli_fetch_assoc($entradav);

//Calculando difrença de tempo
$entrada = $row_entrada['entrada'];         
$saida = $row_entrada['saida'];
$hora1 = explode(":",$entrada);
$hora2 = explode(":",$saida);
$acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60) + $hora1[2];
$acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60) + $hora2[2];
$resultado = $acumulador2 - $acumulador1;
$hora_ponto = floor($resultado / 3600);
$resultado = $resultado - ($hora_ponto * 3600);
$min_ponto = floor($resultado / 60);
$resultado = $resultado - ($min_ponto * 60);
$secs_ponto = $resultado;
//Grava na variável resultado final
$tempo = $hora_ponto.":".$min_ponto.":".$secs_ponto;  

  
//Mostrando resultado de acordo com a permanencia e setando valores a serem pagos
if($tempo > '0:00:00' and $tempo <= '0:15:00'){
    $msgresult = 'Não será Cortesia';
}else if($tempo > '0:15:00' and $tempo <= '1:00:00'){
    $msgresult =  '27 reais';
    $_SESSION['total'] = $_SESSION['total'] + 27;
}else if($tempo > '1:00:00' and $tempo <= '2:00:00'){
    $msgresult =  '32 reais';
    $_SESSION['total'] = $_SESSION['total'] + 32;
}else if($tempo > '2:00:00'){ 
    while($hora_ponto != 0){
        $hora_ponto = $hora_ponto - 1; 
        $contah++;
    }
    $contah = $contah - 2;
    while($contah != 0){
        $acumuladorp = $acumuladorp + 9;
        $contah = $contah - 1;
    }

    $acumuladorp = $acumuladorp + 32;

    $msgresult =  $acumuladorp . ' reais';


    $_SESSION['total'] = $_SESSION['total'] + $acumuladorp;

}else if($tempo < '00:00:00'){
    $msgresult =  'Hora negativa impossivel estipular valor';
}

?>









<?php
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="img/speedcar.ico" type="image/x-icon">
    <title> Cadastro do Estacionamento </title>
</head>

<body>



  <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
    <div class="container-fluid" id="header">
      <img src="img/speedcar.ico" class="full-width-logo" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item-home">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item-nos">
            <a class="nav-link" href="institucional.php">Sobre Nós</a>
          </li>
          <li class="nav-item-blog">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item-contato">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
          <li class="nav-item-mapa">
            <a class="nav-link" href="mapa.certo.php"><em>Mapa de Localização</em></a>
          </li>
          <li class="nav-item-login">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<center>
  
  <!-- Formulario para mostrar dados do registro -->
<div id="divfinals" class="form">
    <h1><b>Registrar veiculo</b></h1>
    <br>

    <form method="POST" action="proc_estaciona.php">
      <label id="placa" for="placa">Valor a ser pago: <BR> <?php echo $msgresult;?></label>
      <br><br>
      <label id="data"for="data">Permanencia: <BR> <?php echo $tempo;?></label>
      <br><br>
      <label id="hora"for="horario">Horario de entrada: <BR> <?php echo $row_entrada['entrada'];?></label>
      <br><br>
      <label id="vaga"for="vaga">Horario de saida: <BR> <?php echo $row_entrada['saida'];?></label>
      <br><br>
      <label id="vaga"for="vaga">Vaga: <BR> <?php echo $row_entrada['vaga']; echo '<br>';?></label>
      <br><br>
      
      <a href="saida.php" id='voltarb'>
        <label>Voltar</label>
      </a>
      <a href="cadastrarv.php" id='iniciob'>
        <label>Inicio</label>
      </a>
                
    </form>

    
  </div>


  <style>
    body{
      background-color: rgba(22, 34, 57,0.95);
    }

    @media screen and (min-width: 900px) {
      .full-width-logo{
        padding-left: 3cm;
      
      }
    }
    @media screen and (max-width: 900px) {
      .full-width-logo{
        padding-left: 1cm;
      }
    }
    .nav-item-home{
      padding: auto;
      padding-left: 150%;
    }

    .nav-item-nos{
      padding-left: 1cm;
    }

    .nav-item-blog{
      padding-left: 1cm;
    }

    .nav-item-login{
      padding-left: 1cm;
    }

    .nav-item-contato{
      padding-left: 1cm;
    }

    .nav-item-mapa{
      padding-left: 1cm;
    }

    .nome{
      color: azure;
    }

    .full-width-rodape{
      padding-top: cm;
    } 




    @media screen and (max-width: 900px) {
      #divcadast{
        width: 95%;
      
      }
    }

    .form {
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        color: white;
        padding: 3rem;
    }

    #divfinals{
      margin-top: 27vh;
      background-color: #212529;
      /* width: 50vh;
      height: 35vh; */
      border-radius: 10px;
      float: none;
    }
    #placa{
        color: white;
        border: 0px;
    }
    #data{
        color: white;
        border: 0px;
    }
    #hora{
        color: white;
        border: 0px;
    }
    #campop{
      /* margin-top: 15px; */
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      outline: none;
    }
    #campod{
      /* margin-top: 15px; */
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      outline: none;
    }
    #campoh{
      /* margin-top: 15px; */
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      outline: none;
    }

    #campov{
      /* margin-top: 15px; */
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      outline: none;
    }

    input::placeholder{
      color: white;
    }

    #voltar{
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      margin-top: 2.5rem;
      padding: 0.62rem;
      cursor: pointer;
    }

    

    #inicio{
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      margin-top: 2.5rem;
      padding: 0.62rem;
      cursor: pointer;
    }

    #voltarb {
      border: none;
      border-radius: 3px;
      margin: 0 15px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }
    #iniciob {
      border: none;
      border-radius: 3px;
      margin: 0 15px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }

  </style>