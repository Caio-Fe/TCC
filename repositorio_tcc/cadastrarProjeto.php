<?php 
  require "validador_acesso.php";
  include "dbcon.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Repositório: Cadastrar Projeto/title>
     <!-- add icon link -->
     <link rel="icon" href=
"img/image2.jpg"
          type="image/x-icon">
    <!--
      enviar com pdf não é tão simples, precisa de um form action, e o php precisa de um $_FILES
      tentativa refeita por outro metodo abaixo
    <script>
        function enviarForm() {
                let titulo = document.getElementById("titulo").value;
                let autor1 = document.getElementById("autor1").value;
                let autor2 = document.getElementById("autor2").value;
                let orientador = document.getElementById("orientador").value;
                let resumo = document.getElementById("resumo").value;
                let abstract = document.getElementById("abstract").value;
                let ano = document.getElementById("ano").value;
                let professor1 = document.getElementById("professor1").value;
                let professor2 = document.getElementById("professor2").value;
                let palavras_chave = document.getElementById("palavras_chave").value;
                let keywords = document.getElementById("keywords").value;
                let unidade = document.getElementById("unidade").value;
                let filename = document.getElementById("filename").value;
                let email = $_SESSION['email'];
                let xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function() {
                    console.log("mudou status: " + this.readyState);
                    if (this.readyState == 4 && this.status == 200) {
                        console.log("Chegou resposta: " + this.responseText)
                        document.getElementById("msg").innerHTML = this.responseText;
                    }
                }
                xmlHttp.open("GET", "cadastrarUsuarios.php?email=" + email + "&password=" + password + "&perfil_id=" + perfil_id);
                xmlHttp.send();
                console.log("Enviei requisição");
            }
    </script>-->
</head>
<body onload="if (document.referrer == '') self.location='index.php';">

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
    <div class="container" style=" background-color: rgb(176, 191, 255);text-align: center;margin-left:30% ;margin-right:30%;margin-bottom:30%">
        <!--Grid do counteudo 1-->
        <!--
        <div class="row" style="padding:10px">
          <div class="col bg-white" style="margin-right:10px">
          <!--
            Título 1 x
            Autor 2 x
            Orientador 1 x
            Resumo 1 x
            Abstract 1 x
            Ano 1 x
            Orientador 1 x
            Professor 1 x
            Professor 1 x
            Palavras-Chave 1 x
            Unidade 1 x

            let titulo = document.getElementById("titulo").value;
                let autor1 = document.getElementById("autor1").value;
                let autor2 = document.getElementById("autor2").value;
                let orientador = document.getElementById("orientador").value;
                let resumo = document.getElementById("resumo").value;
                let abstract = document.getElementById("abstract").value;
                let ano = document.getElementById("ano").value;
                let professor1 = document.getElementById("professor1").value;
                let professor2 = document.getElementById("professor2").value;
                let palavras_chave = document.getElementById("palavras_chave").value;
                let keywords = document.getElementById("keywords").value;
                let unidade = document.getElementById("unidade").value;
                let filename = document.getElementById("filename").value; // pdf
                let email = $_SESSION['email']; // do login
          --><!--
            <h5>Preencha os campos abaixo</h5>
            <form method="post" enctype="multipart/form-data" id="projform">
              <div class="form-input py-2">
                <div class="form-group">
                <input type="text" class="form-control" name="titulo" id="titulo"
                    placeholder="Nome do Projeto" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="autor1" id="autor1"
                      placeholder="Nome do autor" required>
                </div>
                  <!-- 
                  <div class="form-group">
                    <input type="text" class="form-control" name="segundo_autor"
                        placeholder="Nome do Autor (opcional: caso tenha mais um, dupla)">
                    </div>
                    <div class="form-group">
                  <input type="text" class="form-control" name="primeiro_autor"
                      placeholder="Nome do autor" required>
                </div>
                  -->
                <!-- banca são orientador +2 professores?--> 
                <!--
                <div class="form-group">
                  <input type="text" class="form-control" name="orientador" id="orientador"
                      placeholder="Nome do Orientador" required>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="resumo" id="resumo"
                        placeholder="resumo" form="projform" required></textarea>
                  </div>
                  <div class="form-group">
                    <textarea type="text" class="form-control" name="abstract" id="abstract"
                        placeholder="abstract" form="projform" required></textarea>
                  </div>
                  <div class="form-group">
                  <input type="number" min="2000" max="2023" step="1" value="2023" class="form-control" name="ano" id="ano"
                    placeholder="ano" required onKeyDown="return false" >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="professor1" id="professor1"
                    placeholder="Primeiro Professor da Banca" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="professor2" id="professor2"
                    placeholder="Segundo Professor da Banca" required>
                </div
                <div class="form-group">
                  <label for="palavras_chave">Palavras-Chave</label>
                  </label>
                  <textarea class="form-control" name="palavras_chave" id="palavras_chave"
                    placeholder="Palavras-Chave" form="projform" required>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Unidade</label>
                  <select  class="form-control" name="Unidade" id="Unidade" required>
                    <option value="Rio_de_Janeiro">Rio de Janeiro</option>
                </select>
                <div class="form-group">
                <input type="file" name="pdf_file"
                    class="form-group" accept=".pdf"
                    title="Upload PDF"/>
                </div>
                <div class="form-group">
                <input type="submit" class="btnRegister"
                    name="submit" value="Submit">
                <input type="reset" class="btnRegister"
                    name="reset" value="Limpar">
                </div>
            </div>
            </form>
            <!--
          <div>
            <div class="container">
            <div class="row">
                <div class="col">Titulo</div>
                <div class="col"><input type="text"></div>
            </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">Orientador</div>
                    <div class="col"><input type="text"></div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">Aluno</div>
                        <div class="col"><input type="text"></div>
                    </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">Segundo Aluno (se houver)</div>
                            <div class="col"><input type="text"></div>
                        </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">Orientador</div>
                                <div class="col"><input type="text"></div>
                            </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col">Anexo de DOC</div>
                                    <div class="col"><input type="text"></div>
                                    <!-- este input seria diferente? como isto iria para o banco em um form action?-->
                                  <!--
                                  </div>
                                <button type="submit"style="margin-bottom:5%"><a class="btn btn-black" href="logado.php"  role="button">Cadastrar</a></button> 
                                <!-- para teste o botão está redirecionando para a tela inicial de usuário de logado-->
          <!--</div>
        </div>-->

        <!--<div class="col-lg-6 col-md-6 col-12">
            <strong>Fill UserName and Upload PDF</strong>-->
                <form method="post" enctype="multipart/form-data">
                    <?php
                        // If submit button is clicked
                        if (isset($_POST['submit']))
                        {
                        // get fields from the form when submitted
            $titulo = $_POST['titulo'];
            $autor1 = $_POST['autor1'];
            $autor2 = $_POST['autor2'];
            $orientador = $_POST['orientador'];
            $resumo = $_POST['resumo'];
            $abstract = $_POST['abstract'];
            $ano = $_POST['ano'];
            $professor1 = $_POST['professor1'];
            $professor2 = $_POST['professor2'];
            $palavras_chave = $_POST['palavras_chave'];
            $keywords = $_POST['keywords'];
            $unidade = $_POST['Unidade'];
            $email = $_SESSION['email']; // that one comes from the login

                        if (isset($_FILES['pdf_file']['name'])) 
                        { 
                        // If the ‘pdf_file’ field has an attachment (from guide)
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                            
                            // Move the uploaded pdf file into the pdf folder (from guide)
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            // Insert the submitted data from the form into the table
                            $insertquery = 
                            "INSERT INTO projects(titulo,autor1,autor2,orientador,resumo,abstract,ano,professor1,professor2,palavras_chave,keywords,unidade,filename,email) VALUES('$titulo','$autor1','$autor2','$orientador','$resumo','$abstract','$ano','$professor1','$professor2','$palavras_chave','$keywords','$unidade','$file_name','$email')";
                            
                            // Execute insert query (from guide)
                            $iquery = mysqli_query($con, $insertquery);	 

                                if ($iquery)
                            {							 
                    ?>											 
                                <div class=
                                "alert alert-success alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                    ×
                                    </a>
                                    <strong>Success!</strong> Data submitted successfully.
                                </div>
                                <?php
                                }
                                else
                                {
                                ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                    ×
                                    </a>
                                    <strong>Failed!</strong> Try Again!
                                </div>
                                <?php
                                }
                            }
                            else
                            {
                            ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                <a class="close" data-dismiss="alert" aria-label="close">
                                    ×
                                </a>
                                <strong>Failed!</strong> File must be uploaded in PDF format!
                                </div>
                            <?php
                            }// end if
                        }// end if
                    ?> 
                    
                    <div class="form-input py-2">
                        <div class="form-group">
            <h5>Preencha os campos abaixo</h5>
            <form method="post" enctype="multipart/form-data" id="projform">
              <div class="form-input py-2">
                <div class="form-group">
                  <label>Nome do Projeto</label>
                <input type="text" class="form-control" name="titulo" id="titulo"
                    placeholder="Nome do Projeto" required>
                </div>
                <label>Nome do Autor</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="autor1" id="autor1"
                      placeholder="Nome do autor" required>
                </div>
                <label>Nome do Segundo Autor (opcional)</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="autor2" id="autor2"
                        placeholder="Nome do Autor (opcional: caso tenha mais um, dupla)">
                    </div>
                <!-- banca são orientador +2 professores?--> 
                <label>Nome do Orientador</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="orientador" id="orientador"
                      placeholder="Nome do Orientador" required>
                </div>
                <label>Resumo</label>
                <div class="form-group">
                    <input class="form-control" name="resumo" id="resumo"
                        placeholder="resumo" required>
                  </div>
                  <label>Abstract</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="abstract" id="abstract"
                        placeholder="abstract" required>
                  </div>
                  <label>Ano</label>
                  <div class="form-group">
                  <input type="number" min="2000" max="2023" step="1" value="2023" class="form-control" name="ano" id="ano"
                    placeholder="ano" required onKeyDown="return false" >
                </div>
                <label>Primeiro Professor da Banca</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="professor1" id="professor1"
                    placeholder="Primeiro Professor da Banca" required>
                </div>
                <label>Segundo Professor da Banca</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="professor2" id="professor2"
                    placeholder="Segundo Professor da Banca" required>
                </div>
                <label>Palavras-Chave</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="palavras_chave" id="palavras_chave"
                    placeholder="Palavras-Chave" required>
                </div>
                <label>Keywords</label>
                <div class="form-group">
                  <input class="form-control" name="keywords" id="keywords"
                    placeholder="Keywords" required>
                </div>
                <div class="form-group">
                  <label>Unidade</label>
                  <select  class="form-control" name="Unidade" id="Unidade" required>
                    <option value="Rio_de_Janeiro">
                      Rio de Janeiro
                    </option>
                </select>
                </div>
                <label>PDF</label>
                        <div class="form-group">
                            <input type="file" name="pdf_file"
                                class="form-control" accept=".pdf" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit"
                                class="btnRegister" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
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