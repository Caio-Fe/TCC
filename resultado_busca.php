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

    <title>Repositório: Resultado_Busca</title>
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
            <?php
include_once 'dbcon.php';
$selectQuery = 'SELECT * FROM projects ORDER BY id DESC';
// squery saves the result of the query
$squery = mysqli_query($con, $selectQuery);
?>
            <div>
                <table class="table table-striped table-hover">
                    <thead style=" background-color:#ffc118;">
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Orientador</th>
                            <th scope="col">Ano</th>
                            <?php if(isset($_SESSION['autenticado'])) {
                                if ($_SESSION['perfil_id'] == '2') {?>
                            <th scope=" col">Ações</th>
                            <?php }
                                } ?>
                        </tr>
                    </thead>
                    <tbody style="background-color:#b0c6ff;">
                        <?php
    while  ($result = mysqli_fetch_assoc($squery)) {
        echo "<tr>";
        echo "<td>".$result['titulo']."</td>";
        echo "<td>".$result['autor1']."</td>";
        echo "<td>".$result['orientador']."</td>";
        echo "<td>".$result['ano']."</td>";
        if(isset($_SESSION['autenticado'])) {
            if ($_SESSION['perfil_id'] == '2') {?>
                        <td>
                            <a href="alterarProjeto.php?id=<?php echo $result['id']; ?>"
                                class="btn btn-primary btn-sm">Alterar</a>
                            <br /> <br />
                            <a href="deletarProjeto.php?id=<?php echo $result['id']; ?>"
                                class="btn btn-danger btn-sm">Deletar</a>
                        </td>
                        <?php }
            } ?>
                        <?php
            echo "</tr>";

        ?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- grid do footer -->
            <?php include_once 'footer.php'; ?>
</body>

</html>