<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONTATO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="img/speedcar.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/contato.css">
</head>
<body id="body">

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
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
          <a class="nav-link" href="mapa.certo.php">Mapa de localização</a>
        </li>
        <li class="nav-item-login">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form> -->
    </div>
  </div>
</nav>

<h1 class="full-width1-n1">Fale conosco</h1>

<center>
  <form id action="" method="post">
    <div class="">
      <div class="full-width-fieldset">
        <fieldset>
        <label for=""></label>
         <label class="full-width-nome" for="">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" placeholder="Seu nome" required=""><br>

         <label class="full-width-nome" for="">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Seu e-mail" required=""><br> 

        <label class="full-width-nome" for="">Assunto</label>                  
        <input name="assunto" type="text" class="form-control" id="email" placeholder="Assunto" required=""><br>    
        
         <label class="full-width-nome" for="">Mensagem/Comentários</label>          
        <textarea name="mensagem" rows="6" class="form-control" id="mensagem" placeholder="Motivo do seu contato..." required=""></textarea><br>
        <br>
        <div class="botao">
          <button type="submit" id="enviar" class="button">Enviar sua Mensagem</button>
        </div>
      </fieldset> 
    </div>
  </div>
  </form>
</center>


<center>
  <main>
    <article class="full-width-conteudo">
      <h2 class="full-width-redes">Redes Sociais</h2>
      <h5 class="full-width-instagram">@speedcar</h5>
      <img class="full-width-insta" src="img/insta.jpg" alt="">
      <br>
      <h5 class="full-width-facebook">facebook/speedcar</h5>
      <img class="full-width-face" src="img/face.jpg" alt="">
      <br>
      <h5 class="full-width-twitter">@speedcar</h5>
      <img class="full-width-tt" src="img/tt.png" alt="">
      <br>
      <h4 class="full-width-telefone">Telefone:</h4>
      <h5 class="full-width-tel">(11) 9666-0001</h5>
      <h4 class="full-width-email">E-mail:</h4>
      <h5 class="full-width-mail">speedcartime@gmail.com</h5>

    </article>
  </main>
</center>

<center>
  <footer>
    <div class="full-width-rodape">
      <p class="nome"> The SpeedCar since 1990</p>
    </div>
  </footer>
  
</center>

</body>
</html>
