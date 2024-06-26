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

    <title>Repositório: Creditos</title>
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
    margin-left:60% ;margin-right:30%;margin-bottom:30%; margin-top:8%; color:#fff;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 style="margin: 5%;margin-left: 30%;margin-right: 30%;color:#fff;">
                            Página Inicial
                            <a href="https://www.faeterj-rio.edu.br" target="_blank"
                                rel="noopener noreferrer">FAETERJ-Rio</a>
                        </h3>
                        <p>
                            Exemplo de site feito por Caio Felipe Gomes Pereira
                        </p>
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