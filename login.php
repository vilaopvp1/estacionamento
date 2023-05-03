<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="img/speedcar.ico" type="image/x-icon">
  <title>Login</title>
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
    <div id="divladm" class="form">
      <h1 id="h3admin">Painel Admin</h1>

      <?php
        //Reposta sobre a tentiva de login
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        };
      ?>

      <!-- Formulario para efetuar login -->
      <div class="input-group">
        <form method="post" id = "flogin" action="proc_login.php">
          <div class="input-box">
            <label id="logina">Login: <br></label>
            <input type="text" id="campou"name="usuario" placeholder="Digite seu login">
          </div>
          <br>
            <div class="input-box"> 
              <label id="senhaa">Senha: <br></label>
              <input type="password" id="campos"name="senha" id="senha" placeholder="Digite sua senha">
            <br>
          </div>
          <input id="entrar"type="submit" value="Entrar">
          <a href="cadastrarf.php" id='cadastrob'>
            <label>Cadastrar Funcionario</label>
          </a>
          <!-- <input type="reset" value="Apagar"> -->
         
        </form> 
      </div>

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


      .form {
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 3rem;
      }
      .input-group {
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 1rem 0;
        flex-direction: column;
      }
      .input-box {
        display: flex;
        flex-direction: column;
        margin-bottom: 1.1rem;
      }
      #divladm{
        margin-top: 27vh;
        background-color: #212529;
        /* width: 50vh;
        height: 35vh; */
        border-radius: 10px;
        float: none;
      }

      @media(max-width: 900px){
        #divladm{
          width: 95%;
        }
      }

      #h3admin{
        color: white;
        margin-top: 25px;
        display: inline-block;
      }
      #flogin{
          
      }
      #logina{
        color: white;
        display: block;
        /* margin-top: 5px; */
      }
      #campou{
        /* margin-top: 15px; */
        height: 20px;
        background-color: rgba(22, 34, 57,0.95);
        color: white;
        border-radius: 5px;
        border: 0px;
        outline: none;
      }
      input::placeholder{
        color: white;
      }
      #senhaa{
        color: white;
        /* margin-top: 25px; */
        display: block;
        border: 0px;
      }
      #campos{
        /* margin-top: 15px; */
        height: 20px;
        background-color: rgba(22, 34, 57,0.95);
        color: white;
        border-radius: 5px;
        border: 0px;
        outline: none;
      }
      #entrar{
        /* margin-top: 40px; */
        background-color: rgba(22, 34, 57,0.95);
        color: white;
        border-radius: 5px;
        align-items: center;
        display: flex;
        border: 0px;
        margin-top: 2.5rem;
        padding: 0.62rem;
        cursor: pointer;
      }
      #cadastrob {
        border: none;
        border-radius: 3px;
        margin: 0 15px;
        background-color: rgba(22, 34, 57,0.95);
        color: white;
        text-decoration: none;
      }
      
    </style>


  </center>
  
  
</body>
</html>