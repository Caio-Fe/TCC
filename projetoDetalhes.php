<?php
include 'dbcon.php';
session_start();
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
} else {
    header('Location: resultadoBusca.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Repositório:
        <?php echo $result['titulo']?>
    </title>
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

    <!--Grid do menu lateral -->
    <?php include_once 'lateral.php'; ?>

    <!--Grid do corpo-->
    <div class="col-6 col-md-2" style="padding-left:80%">
        <div
            style="border-radius: 15px; background-color: #435281; display:inline-block; margin-top: 5px;border-radius: 5px">
            <div class="d-flex flex-column flex-shrink-0 p-3 position-fixed"
                style=" width: 200px; margin-top:70px;margin-left:70px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#titulo" class="nav-link link-dark bg-light" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#titulo"></use>
                            </svg>
                            Titulo
                        </a>
                    </li>
                    <li>
                        <a href="#autor" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#autor"></use>
                            </svg>
                            Autor
                        </a>
                    </li>
                    <li>
                        <a href="#orientador" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#orientador"></use>
                            </svg>
                            Orientador
                        </a>
                    </li>
                    <li>
                        <a href="#resumo" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#resumo"></use>
                            </svg>
                            Resumo
                        </a>
                    </li>
                    <li>
                        <a href="#abstract" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#abstract"></use>
                            </svg>
                            Abstract
                        </a>
                    </li>
                    <li>
                        <a href="#ano" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#ano"></use>
                            </svg>
                            Ano
                        </a>
                    </li>
                    <li>
                        <a href="#banca" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#Banca"></use>
                            </svg>
                            Banca
                        </a>
                    </li>
                    <li>
                        <a href="#palavrachave" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me -2" width="16" height="16">
                                <use xlink:href="#palavrachave"></use>
                            </svg>
                            Palavra-Chave
                        </a>
                    </li>
                    <li>
                        <a href="#keyword" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#keyword"></use>
                            </svg>
                            Key-Word
                        </a>
                    </li>
                    <li>
                        <a href="#unidade" class="nav-link link-dark bg-light" style="margin-top:2px">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#unidade"></use>
                            </svg>
                            Unidade
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- projeto dados-->
    <div class="col-lg-6" style="padding-top:100px;">
        <div class="container"
            style=" background-color: rgb(176, 191, 255);text-align: center; margin-left:50% ;margin-right:50%;margin-bottom:30%">
            <h5>
                <p style="text-align:left;margin-top: 5%;padding-left: 5%;padding-top: 5%;">Título<a name="titulo"></a>
                </p>
                <br />
                <p style="text-align:center;padding-left: 5%;">
                    <?php echo $result['titulo'] ?>
                </p><br />
                <p style="text-align:left;padding-left: 5%;"> Autor(es):<a name="autor"></a></p><br />
                <?php echo $result['autor1']?><br />
                <?php echo $result['autor2']?><br />
                <br />
                <p style="text-align:left;padding-left: 5%;"> Orientador:<a name="orientador"></a></p><br />
                <?php echo $result['orientador']?><br /><br />
            </h5>
            <hr>
            <h5>
                <p>Resumo<a name="resumo"></a></p><br />
            </h5>
            <p style="padding-left:5%;padding-right: 5%">
                <?php echo $result['resumo']?>
            </p>
            <hr>
            <h5>Abstract<a name="abstract"></a></h5><br />
            <p style="padding-left:5%;padding-right: 5%">
                <?php echo $result['abstract']?>
            </p>
            <hr>
            <h5 style="text-align:left;padding-left: 5%;">
                <p> Ano:
                    <?php echo $result['ano'] ?><a
                        name="ano"></a>
                </p><br />
                <p>Banca:<a name="banca"></a></p><br />
                <p>Orientador(a):
                    <?php echo $result['orientador']?><a
                        name="orientador"></a>
                </p><br />
                <p>
                    Professor(a):
                    <?php echo $result['professor1'] ?><br />
                </p> <br />
                <p>
                    Professor(a):
                    <?php echo $result ['professor2'] ?>
                </p><br />
                <p>Palavras-Chave:
                    <?php echo $result['palavras_chave']?><a
                        name="palavrachave"></a>
                </p><br />
                <p>Keywords:<a name="keyword"></a>
                    <?php echo $result['keywords']?>
                </p><br />
                <p>Unidade:
                    <?php echo $result['unidade'] ?><a
                        name="unidade"></a>
                </p>
                <p>
                    <a href="/TCC/pdf/<?php echo $result['filename'];?>"
                        target="_blank">Download
                        do PDF</a>
                </p>
                <br />
                Trabalhos Sugeridos<br />
            </h5>
            <div class=" container" style="padding-left:5%;padding-right: 5%;">
                <?php
                $palavras_chave = explode(',', $result['palavras_chave'], 100);
foreach ($palavras_chave as $palavra) {
    $sql = "SELECT id, titulo FROM projects WHERE palavras_chave LIKE '%$palavra%' AND id != $id LIMIT 5";
    $squery = mysqli_query($con, $sql);
    while ($result = mysqli_fetch_assoc($squery)) { ?>
                <div class="row">
                    <div class="col" style="border:1px solid #000;">
                        <P>Projetos Sugeridos Para a Palavra-Chave:
                            <?php echo $palavra; ?>
                        </p>
                        <a
                            href='projetoDetalhes.php?id=<?php echo $result['id']; ?>'>
                            <?php echo $result['titulo']; ?>
                        </a>

                        <?php
    }
} ?>
                        <br />
                    </div>
                </div>
            </div>
            <!-- grid do footer -->
            <?php include_once 'footer.php'; ?>
</body>


</html>