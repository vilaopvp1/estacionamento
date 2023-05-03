<?php
    session_start();
    include_once("conexao.php");
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






 
  <div id="divcadast" class="form">
    <h1><b>Registrar veiculo</b></h1>
    <br>
      
    <?php
      //Respota sobre o registro do veiculo
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }

      //Mostrando o total de vagas
      $total_vaga = "SELECT COUNT(id) AS 'vagas' FROM veiculos";
      $total_vagas = mysqli_query($conn, $total_vaga);
      $row_vagas = mysqli_fetch_assoc($total_vagas);
    ?>
    

    <!-- Formulario de cadastro do veiculo -->
    <form method="POST" action="proc_estaciona.php">
      <label id='vagasd'> Vagas ocupadas: <?php echo $row_vagas['vagas'];?></label><br>
      <label id="placa" for="placa">Placa do Veículo:</label>
      <input type="text" name='placa'  id="campop" placeholder="Digite a sua Placa" required autofocus><br><br>

      <label id="hora"for="horario">Horario de entrada:</label>
      <input type="time" name="horario"  id="campoh" placeholder="Digite o horario da sua entrada" required autofocus><br><br>

      <label id="vaga"for="vaga">Vaga:</label>
      <input type="number" max='200' name="vaga"  id="campov" placeholder="Digite a vaga" required autofocus><br><br>


      <button id="salvar" type="submit" style="border-style: solid; cursor: pointed;">Salvar</button>
      <button id="apaga" onclick="saida()" style="border-style: solid; cursor: pointed;" >Saida</button>
      <script>function saida(){window.location.href = "saida.php"}</script>
      <br>
      <a href="relatorio.php" id='relatoriob'>
            <label>Relatorio</label>
      </a>
      <br>
      <a id='voltarb'href="login.php" >
        <label>Voltar</label>
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

    #divcadast{
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

    #salvar{
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      border-radius: 5px;
      border: 0px;
      margin-top: 2.5rem;
      padding: 0.62rem;
      cursor: pointer;
    }

    

    #apaga{
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
    #relatoriob {
      border: none;
      border-radius: 3px;
      margin: 0 15px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }

  </style>
        
</body>