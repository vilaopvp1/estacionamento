<?php 
session_start();
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="img/speedcar.ico" type="image/x-icon">
  <title>Registrar Saida</title>
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
  <!-- Formulario para mostrar veiculos, registrar saida e buscar placa -->
  <div id="divsaida" class="listasaida">
    <h1 id="h1saida">Registrar saida</h1>

    <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      };


      $veiculos_cad = "SELECT * FROM veiculos";
      $vei_cad = mysqli_query($conn, $veiculos_cad);
    ?>
    <div id="listveicu">
    <form method="POST" action="saida.php">
      Pesquisar:<input style= "color: white;"type="text" id='pesquisa' name="pesquisar" placeholder="Digita a placa">
      <input type="submit" id='pesquisab'value="Enviar">
      <input type="submit" id='pesquisab' value="Resetar">
    </form>
      <scrip>

      
        <?php
          echo "<br>";
          if(empty($_POST['pesquisar'])){
            while($row_veiculos = mysqli_fetch_assoc($vei_cad)){ 
              echo "Vaga: " . $row_veiculos['vaga'] . "<br>";
              echo "Placa: " . $row_veiculos['placa'] . "<br>";
              echo "Hora de entrada: " . $row_veiculos['entrada'] . "<br>";
              echo "<a id='saidab' href='regsaida.php?id=" . $row_veiculos['id'] . "'>Registrar saída</a>";
              echo "<a id='apagab' href='apagaveiculo.php?id=" . $row_veiculos['id'] . "'>Apagar</a><br><br>";
              echo "<br>";
            };
          }else{
            $pesquisar = $_POST['pesquisar'];
            $veiculos_cadb = "SELECT * FROM veiculos WHERE placa LIKE '%$pesquisar%' LIMIT 5";
            $vei_cad = mysqli_query($conn, $veiculos_cadb); 
            while($row_veiculos = mysqli_fetch_array($vei_cad)){
              echo "Vaga: " . $row_veiculos['vaga'] . "<br>";
              echo "Placa: " . $row_veiculos['placa'] . "<br>";
              echo "Hora de entrada: " . $row_veiculos['entrada'] . "<br>";
              echo "<a id='saidab' href='regsaida.php?id=" . $row_veiculos['id'] . "'>Registrar saída</a>";
              echo "<a id='apagab' href='apagaveiculo.php?id=" . $row_veiculos['id'] . "'>Apagar</a><br><br>";
              echo "<br>";
            };
          };
        ?>
      </scrip>
      <br>
      <a href="cadastrarv.php" id='voltarb'>
        <label>Voltar</label>
      </a>
    </div>

    

  </div>
  <style>
    body{
      background-color: rgba(22, 34, 57,0.95);
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



    @media(max-width: 900px){
      #divsaida {
        width: 95%;
      }
    }


    .listasaida {
        width: 40%;
        display: flex;
        margin-top: 15vh;
        flex-direction: column;
        justify-content: center;
        align-items: center;    
        background-color: #212529;
        color: white;
        padding: 3rem;
        border-radius: 10px;
    }
    #divsaida{
      /* margin-top: 27vh; */
      background-color: #212529;
      /* width: 50vh;
      height: 35vh; */
      border-radius: 10px;
      float: none;
    }

    #pesquisa{
      background-color: rgba(22, 34, 57,0.95);
      color: #212529;
      border: none;
      border-radius: 5px;
    }
    
    input::placeholder{
      color: white;
    } 
    #pesquisab{
      border: none;
      border-radius: 5px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
    }
    #saidab{
      border: none;
      border-radius: 8px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }
    #apagab{
      border: none;
      border-radius: 8px;
      margin: 0 15px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }
    #voltarb {
      border: none;
      border-radius: 3px;
      margin: 0 15px;
      background-color: rgba(22, 34, 57,0.95);
      color: white;
      text-decoration: none;
    }

  </style>

</center>
</html>