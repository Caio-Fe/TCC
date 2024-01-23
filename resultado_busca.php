<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Repositório: Pagina Inicial</title>
  <!-- add icon link to the page-->
  <link rel="icon" href="img/image2.jpg" type="image/x-icon">
</head>

<body>

  <!--Bootstrap Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <!--grid do header-->
  <?php include_once 'header.php'; ?>

  <!--Grid do menu lateral com o corpo-->
  <?php include_once 'lateral.php'; ?>

  <!--Grid do corpo-->
  <div class="col-lg-6" style="padding-top:100px">
    <div class="container" style=" background-color:#435281;text-align: center;
    margin-left:60% ;margin-right:30%;margin-bottom:15%; margin-top:8%; color:#000;">
      <h3 style="color:#fff" ; Biblioteca de Trabalhos de Conclusão de <br>
        Curso da Faculdade de Educação Tecnológica do Estado do Rio de Janeiro
      </h3>
      <div>
        <!-- placeholders, não são projetos extraídos de lugar nenhum-->
        <!--Grid do counteudo 1-->
        <div class="row" style="padding:10px">
          <div class="col bg-white" style="margin-right:10px">
            <h5>Trabalho de Conclusão de Curso</h5>
            <div>
              <!-- placeholders, não são projetos extraídos de lugar nenhum-->
              <p style="text-align:left;padding:12%">
                Implementação de um servidor<br> utilizando Linux embarcado
                <br>
                com acesso e gerenciamento...
                <br>
                <br>
                Barros, André Ricardo Gouveia
                <br>
                <br>
                Com o surgimento de sistemas embarcados com propositos educacionais a
                criacao de projetos embarcados tornou-se economicamente viavel, aumentando
                o numero de usuarios que se aventuram nessa área. Neste...
                <br>
                Ver mais
              </p> <!-- seria um botão para o link do projeto-->
            </div>
          </div>
          <!--Grid do conteudo 2-->
          <div class="col bg-white">
            <h5>Últimos trabalhos</h5>
            <br>
            <!-- placeholders, não são projetos extraídos de lugar nenhum
                    cada um teria o link para acesso do respectivo projeto-->
            <p style="text-align:left;padding:12%">
              > Avaliação do potencial de deriva e uniformidade de distribuição utilizando ponta...
              <br>
              > Mapeamento de produções acadêmicas em universidades públicas do Brasil: relevância...
              <br>
              > Sugestão de amostragem para análise de atributos físicos do
              solo orientada pelo mapeamento...
              <br>
              > Análise de microvestígios em sedimentos e solos às margens
              do rio Piracicaba e avaliação...
              <br>
              > Avaliação do solo em diferentes sistemas agroflorestais e no sistema convencional...
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- grid do footer -->
  <?php include_once 'footer.php'; ?>

</body>

</html>