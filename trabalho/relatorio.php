<?php
session_start();
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo'); 

if(date("H:i:s") > '23:00:00'){
  $_SESSION['total'] = 0;
  $_SESSION['entradas'] = 0;
  $redefinir_v = "DELETE FROM veiculos";
  $redefinirvei = mysqli_query($conn, $redefinir_v);
 
}

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

<!-- Formulario para mostrar relatorio diario -->
<div id="divfinals" class="form">
    <h1><b>Registrar veiculo</b></h1>
    <br>
    <form method="POST">
        <label id='horas'><?php echo date("H:i:s") . "<br>";?></label>
        <br><br>
        <label id="placa" for="placa">Faturamento do dia: <BR> <?php if(empty($_SESSION['total'])){echo 'Nenhum valor registrado';}else{echo $_SESSION['total'] . ' reais';};?></label>
        <br><br>
        <label id="data"for="data">Veiculos estacionados: <BR> <?php if(empty($_SESSION['entradas'])){echo 'Nenhuma entrada registrada';}else{echo $_SESSION['entradas'];};?></label>
        <br><br>
        <a href="cadastrarv.php" id='voltarb'>
            <label>Voltar</label>
        </a>  
        <a href="home.php" id='iniciob'>
            <label>Inicio</label>
        </a>
        <a href="redefinir.php" id='redeb'>
            <label>Redefinir</label>
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

    #horas{
      color: white;
      border: 0px;
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
    #redeb {
      border: none;
      border-radius: 3px;
      margin: 0 15px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }

  </style>