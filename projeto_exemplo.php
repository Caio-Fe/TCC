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
    <!-- menu lateral direito-->
    <div class="col-6 col-md-2" style="padding-left:68%" >
        <div style="border-radius: 15px; background-color: #435281; display:inline-block; margin-top: 5px;border-radius: 5px">
          <div class="d-flex flex-column flex-shrink-0 p-3 position-fixed" style=" width: 200px; margin-top:70px">
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#titulo" class="nav-link link-dark bg-light" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#titulo"></use></svg>
                    Titulo
                  </a>
                </li>
                <li>
                  <a href="#autor" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#autor"></use></svg>
                    Autor
                  </a>
                </li>
                <li>
                  <a href="#orientador" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#orientador"></use></svg>
                    Orientador
                  </a>
                </li>
                <li>
                  <a href="#resumo" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#resumo"></use></svg>
                    Resumo
                  </a>
                </li>
                <li>
                  <a href="#abstract" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#abstract"></use></svg>
                    Abstract
                  </a>
                </li>
                <li>
                  <a href="#ano" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#ano"></use></svg>
                    Ano
                  </a>
                </li>
                <li>
                  <a href="#banca" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#Banca"></use></svg>
                    Banca
                  </a>
                </li>
                <li>
                  <a href="#palavrachave" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me -2" width="16" height="16"><use xlink:href="#palavrachave"></use></svg>
                    Palavra-Chave
                  </a>
                </li>
                <li>
                  <a href="#keyword" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#keyword"></use></svg>
                    Key-Word
                  </a>
                </li>
                <li>
                  <a href="#curso" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#curso"></use></svg>
                    Curso
                  </a>
                </li>
                <li>
                  <a href="#unidade" class="nav-link link-dark bg-light"style="margin-top:2px">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#unidade"></use></svg>
                    Unidade
                  </a>
                </li>
              </ul>
            </div>
          </div>
    </div>
        <!-- projeto exemplo-->
        <div class="col-lg-6" style="padding-top:100px">
    <div class="container" style=" background-color: rgb(176, 191, 255);text-align: center; margin-left:50% ;margin-right:50%;margin-bottom:30%">
          <h3>
              <p style="text-align:left;margin-top: 5%;padding-left: 5%;padding-top: 5%;">Título<a name="titulo"></a></p><br>
               <p style="text-align:center;padding-left: 5%;"> Ferramenta para Geração de Código a partir da Especialização do Diagrama de Classes</p><br>
               <p style="text-align:left;padding-left: 5%;"> Autor:<a name="autor"></a></p><br>
                Alexandro Deschamps<br><br>
                <p style="text-align:left;padding-left: 5%;"> Orientador:<a name="orientador"></a></p><br>
                Everaldo Artur Grahl<br><br></h3>
                <hr>
                <h4><p >Resumo<a name="resumo"></a></p><br></h4>
                <p style="padding-left:5%;padding-right: 5%">Uma das grandes preocupações das organizações desenvolvedoras de softwares é a obtenção de certificações que atestem a qualidade dos seus produtos. Uma das ênfases abordadas pelos Sistemas de Garantia da Qualidade é a definição do processo de desenvolvimento de software das organizações. Para obter um processo de desenvolvimento de software bem definido, as organizações utilizam as metodologias abordadas pela Engenharia de Software em conjunto com o uso de ferramentas que automatizem este processo. Este trabalho tem a finalidade de apresentar a construção de uma ferramenta de auxílio ao processo de desenvolvimento de software que possibilita a especialização dos diagramas de classes UML (Unified Modeling Language) por arquitetura e idioma. A finalidade desta especialização é a geração de código através do uso de plugins. A ferramenta proposta ajuda a agregar uma melhor padronização ao processo de desenvolvimento, diminui o tempo de implementação e aumenta a qualidade dos softwares desenvolvidos.</p>
                <hr>
                <h3>Abstract<a name="autor"></a></h3><br>
                <p style="padding-left:5%;padding-right: 5%"> One of the great concerns of organizations that develop software is the attainment of certifications that guarantee the quality of its products. One of the boarded emphases for System of Quality Guaranty is the definition of the process of development of software of the organizations. To get a process of development of software well defined, the organizations use the boarded methodologies for the Engineering of Software in set with the use of tools that automate this process. This work has the purpose to present the construction of a tool of aid to the process of software development that makes possible the specialization of the diagrams of class UML (Unified Modeling Language) for architecture and language. The purpose of this specialization is the generation of code through the use of plugins. The tool proposal helps to add a better standardization to the development process, decrease the implementation time and increase the developed quality of software.</p>
                <hr>
                <h5 style="text-align:left;padding-left: 5%;">
               <p> Ano: 2005<a name="ano"></a></p><br>

               <p>Banca:<a name="banca"></a></p><br>

               <p>Orientador(a): Everaldo Artur Grahl<a name="orientador"></a></p><br>

                Professor(a): Marcel Hugo<br>

                Professor(a):Alexander Roberto Valdameri<br>

               <p>Palavras-Chave:<a name="palavrachave"></a></p><br>

                UML; Diagrama de Classes; Geração de Código, Internacionalização<br>

               <p>Keywords:<a name="keyword"></a></p><br>

                UML; Class Diagram; Code Generation, Internationalization<br>

               <p>Curso: Sistemas de Informação<a name="curso"></a></p><br>

               <p>Unidade:FURB<a name="unidade"></a></p> <br>

                Trabalhos Sugeridos<br>
                </h5>
                <div class="container" style="padding-left:5%;padding-right: 5%;">
                    <div class="row">
                      <div class="col"style="border:1px solid #000;">
                        Biblioteca de TCC's da Faeterj
                      </div>
                      <div class="col"style="border:1px solid #000">
                        Ferramenta para Geração de Código a partir da Especialização do Diagrama de Classes
                      </div>
                      <div class="col"style="border:1px solid #000">
                        Inspeção e adequação das instalações elétricas e procedimentos de trabalho de uma empresa à norma regulamentadora NR-10.
                      </div>
                    </div>
                  </div>
                  <div class="container" style="margin-bottom:5%;padding-bottom:5%;padding-left:5%;padding-right: 5%">
                    <div class="row">
                      <div class="col"style="border:1px solid #000">
                        APLICAÇÃO DAS SETE FERRAMENTAS BÁSICAS DA QUALIDADE NO CICLO PDCA PARA MELHORIA CONTÍNUA: ESTUDO DE CASO NUMA EMPRESA DE AUTOPEÇAS
                      </div>
                      <div class="col"style="border:1px solid #000">
                        Metodologia de projeto de sistema de proteção contra descargas atmosféricas para edifício residencial
                      </div>
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
