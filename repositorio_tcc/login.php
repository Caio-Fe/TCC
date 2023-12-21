<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Repositório: Login</title>
     <!-- add icon link -->
     <link rel="icon" href=
"img/image2.jpg"
          type="image/x-icon">
</head>
<body>

    <!--Bootstrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>       
    <!--Logo Faeterj-->    
    <!--div>
        
    <!--Barra de navegação--> 
    <?php include('header.php');?>
    <!--
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed" style="background-color: #435281;">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/images.jpeg" alt="FAETERJ-Rio" width="300" height="70"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
             <!-- Itens da navegação -->
             <!--
             <ul class="navbar-nav gap-lg-5" style="padding-left:250px">

              <li class="nav-item">
                <a class="nav-link active"href="index.php">Início</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mais Vistos
                </a> -->
                <!--Itens da busca avançada // talvez remover pois seriam os projetos com mais visitas, difícil de fazer?-->
                <!-- <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Titulo 1</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Titulo 2</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Titulo 3</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Titulo 4</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Titulo 5</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Titulo 6</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="projeto_exemplo.php">Ver Todos</a></li> -->
                    <!-- iria para a lista de todos os projetos -->
                    <!--
                  </ul>
                </li> -->
                <!--
              <li class="nav-item ">
                <a class="nav-link active" href="buscaavancada.php">Busca Avançada</a>
              </li>      
            </ul>
          </div>
          <form class="d-flex"style="padding-right:100px">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
          <ul class="navbar-nav "style="padding-right:50px;"> 
            <li class="nav-item ">
            <a class="nav-link active" href="login.php">Login</a>
          </li></ul>
     
        </div>
      </nav>
    </div>-->
    <!--Grid do menu lateral com o corpo-->
    <?php include ('lateral.php');?>
    <!--
    <div class="row">
        <div class="col-sm-2 ">
    <!--Menu Lateral-->
    <!--
    <div style=" display:inline-block; margin-top: 200px;border-radius: 15px; background-color: #435281;" class="position-fixed">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 200px; margin-top:10px; margin-bottom:10px;height: 90%;">
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="ano.php" class="nav-link link-dark bg-light" style="color:#435281">
                  <svg class="bi me-2" width="16" height="16" ><use xlink:href="#ano"></use></svg>
                    Ano
                </a>
              </li>
              <li>
                <a href="orientador.php" class="nav-link link-dark bg-light"style="margin-top:2px;color:#435281;">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#orientador"></use></svg>
                  Orientador
                </a>
              </li>
              <li>
                <a href="palavrachave.php" class="nav-link link-dark bg-light"style="margin-top:2px;color:#435281;">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#palavra-chave"></use></svg>
                  Palavra-Chave
                </a>
              </li>
            </ul>
          </div>
        </div>
    </div>
-->
    
    <!--Conteudo do corpo-->
    <!--Grid do corpo-->
   <div class="col-lg-6" style="padding-top:100px">
    <div class="container" style=" background-color: rgb(176, 191, 255);text-align: center;margin-left:30% ;margin-right:30%;margin-bottom:30%;border:solid 1px">
        <!--<h3>Login</h3>-->
    <div style="margin: 5%;margin-left: 10%;margin-right: 10%;">
      <!--<div class="container">    
      <div class="row">-->

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                  <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                  </div>
                  
                <?php } ?>

                <button class="btn btn-md btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
        <!--<form>
            <div class="mb-3">
              <label for="usuário" class="form-label">Usuário</label>
              <input type="email" class="form-control" id="inputUsuario" aria-describedby="usuarioHelp"> <!-- campo usuario-->
              <!--<div id="usuarioHelp" class="form-text">Nunca compartilharemos seu usuário com mais ninguém.</div>
            </div>
            <div class="mb-3">
              <label for="inputSenha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="inputSenha">
              <!-- campo senha-->
            <!--</div>

            <button type="submit"><a class="btn btn-black" href="logado.php"  role="button">Entrar</a></button> <!-- não tem validação de login, apenas um link para a tela de logado-->
          <!--</form>-->
    </div>
    </div>
    </div>
    <?php include('footer.php');?>
<!--
<footer>
   
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #435281; bottom: 0%;width: 100%;">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
             <!-- Itens da navegação -->
             <!--
             <ul class="navbar-nav gap-5">

                <li class="nav-item" >
                  <a class="nav-link active" href="contato.php">Contato</a>
                </li>
                <li class="nav-item" >
                   <a class="nav-link active" href="creditos.php">Créditos</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link active" href="">Estatísticas</a>
                </li>
            </ul>
      </div>
    </div>
    
</footer>
-->
</body>

</html>
