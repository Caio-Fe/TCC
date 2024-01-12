<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Biblioteca</title>
</head>
<body>

    <!--Bootstrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>       
    <!--Logo Faeterj-->    
    <!--div>
        
    </div> -->
    <!--Barra de navegação-->
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4304f0;">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/images.jpeg" alt="FAETERJ-Rio" width="300" height="70"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
             <!-- Itens da navegação -->
             <ul class="navbar-nav gap-lg-5" style="padding-left:250px">

              <li class="nav-item" >
                <a class="nav-link active" href="index.php">Início</a>
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
              <li class="nav-item ">
                <a class="nav-link" href="buscaavancada.php">Busca Avançada</a>
              </li>      
            </ul>
          </div>
          <form class="d-flex"style="padding-right:100px">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
          <ul class="navbar-nav "style="padding-right:50px;"> 
            <li class="nav-item ">
            <a class="nav-link" href="login.php">Login</a>
          </li></ul>
     
        </div>
      </nav>
    </div>
    <!--Grid do menu lateral com o corpo-->
    <div class="row">
        <div class="col-sm-2 ">
    <!--Menu Lateral-->
    <div style="background-color: #4304f0; display:inline-block; margin-top: 5px;border-radius: 5px;">
        <div class="d-flex flex-column flex-shrink-0 p-3 " style=" width: 280px; margin-top:50px;height: 90%;">
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="ano.php" class="nav-link link-dark bg-light" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#ano"></use></svg>
                  Ano
                </a>
              </li>
              <li>
                <a href="orientador.php" class="nav-link link-dark bg-light"style="margin-top:2px">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#orientador"></use></svg>
                  Orientador
                </a>
              </li>
              <li>
                <a href="palavrachave.php" class="nav-link link-dark bg-light"style="margin-top:2px">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#palavra-chave"></use></svg>
                  Palavra-Chave
                </a>
              </li>
            </ul>
          </div>
        </div>
    </div>
    
    <!--Conteudo do corpo-->
    <!--Grid do corpo-->
    <div class="col-lg-6" style="margin-left:30% ;margin-right:30%;margin-bottom:30%">
    <div class="container" style=" background-color: rgb(176, 191, 255);text-align: center;">
        <h3>Preencha os campos abaixo</h3>
        <!--Grid da primeira linha-->
        <div class="container">
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col">em</div>
              <div class="col">
                <select class="form-select" aria-label="selectOP1">
                  <option selected>Selecione</option>
                  <option value="1">Autor</option>
                  <option value="2">Palavras-Chave</option>
                  <option value="3">Título</option>
                  <option value="4">Orientador</option>
                  <option value="5">Unidade</option>
                  <option value="6">Ano</option>
                  <option value="7">Aluno</option>
                  <option value="8">Instituição</option>
                </select>
                </div>
              <div class="col">
                <select class="form-select" aria-label="selectOP1.1">
                  <option selected></option>
                  <option value="1">e</option>
                  <option value="2">ou</option>
                  <option value="3">e não</option>
                </select>
                
              </div>
            </div>
        </div>
        <!--Grid da segunda linha-->
        <div class="container">
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col">em</div>
              <div class="col">
                <select class="form-select" aria-label="selectOP2">
                  <option selected>Selecione</option>
                  <option value="1">Autor</option>
                  <option value="2">Palavras-Chave</option>
                  <option value="3">Título</option>
                  <option value="4">Orientador</option>
                  <option value="5">Unidade</option>
                  <option value="6">Ano</option>
                  <option value="7">Aluno</option>
                  <option value="8">Instituição</option>
                </select>
                </div>
              <div class="col">
                <select class="form-select" aria-label="selectOP2.1">
                  <option selected></option>
                  <option value="1">e</option>
                  <option value="2">ou</option>
                  <option value="3">e não</option>
                </select>
                
              </div>
            </div>
        </div>
        <!--Grid da terceira linha-->
        <div class="container">
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col">em</div>
              <div class="col">
                <select class="form-select" aria-label="selectOP3">
                  <option selected>Selecione</option>
                  <option value="1">Autor</option>
                  <option value="2">Palavras-Chave</option>
                  <option value="3">Título</option>
                  <option value="4">Orientador</option>
                  <option value="5">Unidade</option>
                  <option value="6">Ano</option>
                  <option value="7">Aluno</option>
                  <option value="8">Instituição</option>
                </select>
                </div>
              <div class="col">
                <select class="form-select" aria-label="selectOP3.1">
                  <option selected></option>
                  <option value="1">e</option>
                  <option value="2">ou</option>
                  <option value="3">e não</option>
                </select>
                
              </div>
            </div>
        </div>
        <!--Grid da quarta linha-->
        <div class="container">
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col">em</div>
              <div class="col">
                 <select class="form-select" aria-label="selectOP4">
                  <option selected>Selecione</option>
                  <option value="1">Autor</option>
                  <option value="2">Palavras-Chave</option>
                  <option value="3">Título</option>
                  <option value="4">Orientador</option>
                  <option value="5">Unidade</option>
                  <option value="6">Ano</option>
                  <option value="7">Aluno</option>
                  <option value="8">Instituição</option>
                </select>
                </div>
              <div class="col">
                <select class="form-select" aria-label="selectOP4.1">
                  <option selected></option>
                  <option value="1">e</option>
                  <option value="2">ou</option>
                  <option value="3">e não</option>
                </select>
                
              </div>
            </div>
        </div>
        <!--Grid da quinta linha-->
        <div class="container">
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col">em</div>
              <div class="col">
                <select class="form-select" aria-label="selectOP5">
                  <option selected>Selecione</option>
                  <option value="1">Autor</option>
                  <option value="2">Palavras-Chave</option>
                  <option value="3">Título</option>
                  <option value="4">Orientador</option>
                  <option value="5">Unidade</option>
                  <option value="6">Ano</option>
                  <option value="7">Aluno</option>
                  <option value="8">Instituição</option>
                </select>
                </div>
              <div class="col">
                <select class="form-select" aria-label="selectOP5.1">
                  <option selected></option>
                  <option value="1">e</option>
                  <option value="2">ou</option>
                  <option value="3">e não</option>
                </select>
              
              </div>
            </div>
        </div>
        <!--Grid da sexta linha-->
        <div class="container">
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col">em</div>
              <div class="col">
                  <select class="form-select" aria-label="selectOP6">
                  <option selected>Selecione</option>
                  <option value="1">Autor</option>
                  <option value="2">Palavras-Chave</option>
                  <option value="3">Título</option>
                  <option value="4">Orientador</option>
                  <option value="5">Unidade</option>
                  <option value="6">Ano</option>
                  <option value="7">Aluno</option>
                  <option value="8">Instituição</option>
                </select>
                </div>
              <div class="col">
                <select class="form-select" aria-label="selectOP6.1">
                  <option selected></option>
                  <option value="1">e</option>
                  <option value="2">ou</option>
                  <option value="3">e não</option>
                </select>
                </div> 
              </div>
            </div>
        </div>
    </div>
</div>

</body>
<footer>
   
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3f97fc; position: fixed; bottom: 0%;width: 100%;">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
             <!-- Itens da navegação -->
             <ul class="navbar-nav gap-5">

              <li class="nav-item" >
                <a class="nav-link active" href="contato.php">Contato</a>
              </li>
              <li class="nav-item" >
                 <a class="nav-link active" href="creditos.php">Créditos</a>
              </li>
                <li class="nav-item" >
                    <a class="nav-link active" href="">Estatísticas</a><!-- não estava bem definido o que teria aqui, remover, tenho de rever-->
                </li>
            </ul>
      </div>
    </div>
    
</footer>
    
</html>
