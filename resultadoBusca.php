<?php
include_once 'dbcon.php';
session_start();
if (!empty($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM projects WHERE titulo LIKE '%$search%' OR autor1 LIKE '%$search%'
    OR autor2 LIKE '%$search%' OR orientador LIKE '%$search%' OR ano LIKE '%$search%'
    OR professor1 LIKE '%$search%' OR professor2 LIKE '%$search%'
    OR palavras_chave LIKE '%$search%' OR keywords LIKE '%$search%'
    OR email LIKE '%$search%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM projects ORDER BY id DESC";
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

    <title>Repositório: Resultado de Busca</title>
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
        <div class="container" style=" background-color:#435281;text-align: center; width:800px;
    margin-left:60% ;margin-right:30%;margin-bottom:15%;
    margin-top:8%; padding-top:30px;padding-right:30px;padding-left:30px; color:#000;">
            <div class="box-search">
                <input type="search" class="form-control col-sm-4" id="search" placeholder="Pesquisar">
                <button onclick="buscar()" class="btn btn-sm btn-outline-light">
                    Pesquisar
                </button>
            </div>
            <div>
                <table class="table table-striped table-hover">
                    <thead style=" background-color:#ffc118;">
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor(es)</th>
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
                        $squery = mysqli_query($con, $sql);
while  ($result = mysqli_fetch_assoc($squery)) {
    echo "<tr>";?>
                        <td><a
                                href="projetoDetalhes.php?id=<?php echo $result['id']; ?>">
                                <?php echo $result['titulo']; ?></a>
                        </td>
                        <?php
    echo "<td>".$result['autor1']."<br>".$result['autor2']."</td>";
    echo "<td>".$result['orientador']."</td>";
    echo "<td>".$result['ano']."</td>";
    if(isset($_SESSION['autenticado'])) {
        if ($_SESSION['perfil_id'] == '2') {?>
                        <td>
                            <a href="alterarProjeto.php?id=<?php echo $result['id']; ?>"
                                class="btn btn-warning btn-sm ">Alterar</a>
                            <br /> <br />
                            <a href="
                                deletarProjeto.php?id=<?php echo $result['id']; ?>"
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
<script>
    var search = document.getElementById('search');
    search.addEventListener('keyup', function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            buscar();
        }
    });

    function buscar() {
        window.location = 'resultadoBusca.php?search=' + search.value;
    }
</script>

</html>