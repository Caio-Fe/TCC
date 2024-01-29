<?php session_start();
include_once 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="pt-<br />">

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
            <h3 style="color:#fff" ; Biblioteca de Trabalhos de Conclusão de <br />
            Faculdade de Educação Tecnológica do Estado do Rio de Janeiro
            </h3>
            <div>
                <!--Grid do counteudo 1-->
                <div class="row" style="padding:10px">
                    <div class="col bg-white" style="margin-right:10px">
                        <h5>Trabalho de Conclusão de Curso</h5>
                        <div>
                            <p style="text-align:left;padding:12%">
                                <?php
                            $sql = "SELECT titulo, resumo, id FROM projects ORDER BY RAND() LIMIT 1";
$selectQuery = mysqli_query($con, $sql);
while($result = mysqli_fetch_assoc($selectQuery)) {
    echo $result['titulo']; ?> <br /><?php
    $resumo = (strlen($result['resumo']) > 300) ? substr($result['resumo'], 0, 300).'...' : $result['resumo'];
    echo $resumo;
    ?><br />
                                <br />
                                <a
                                    href="projetoDetalhes.php?id=<?php echo $result['id']; ?>">
                                    <?php echo 'ver mais';
}?></a>
                            </p>
                        </div>
                    </div>

                    <!--Grid do conteudo 2-->
                    <div class="col bg-white">
                        <h5>Últimos trabalhos</h5>
                        <p style="text-align:left; padding:5%">
                            <?php
        $sql = "SELECT id, titulo FROM projects ORDER BY id  DESC LIMIT 5";
$squery = mysqli_query($con, $sql);
while ($result = mysqli_fetch_assoc($squery)) {?>
                        <p>>
                            <a
                                href='projetoDetalhes.php?id=<?php echo $result['id'] ?>'>
                                <?php echo $result['titulo']?></a><br />
                        </p>
                        <?php
} ?>
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