<?php
require 'validador_acesso.php';
include_once 'dbcon.php';
if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($loop = mysqli_fetch_assoc($result)) {
            $titulo = $loop['titulo'];
            $autor1 = $loop['autor1'];
            $autor2 = $loop['autor2'];
            $orientador = $loop['orientador'];
            $resumo = $loop['resumo'];
            $abstract = $loop['abstract'];
            $ano = $loop['ano'];
            $professor1 = $loop['professor1'];
            $professor2 = $loop['professor2'];
            $palavras_chave = $loop['palavras_chave'];
            $keywords = $loop['keywords'];
            $unidade = $loop['unidade'];
        }
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
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

    <title>Repositório: Alterar Projeto</title>
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
    margin-left:60% ;margin-right:30%;margin-bottom:15%; margin-top:8%; color:#fff;">

            <form method="post" enctype="multipart/form-data">
                <?php
            // If submit button is clicked
            if (isset($_POST['update'])) {
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

                if (isset($_FILES['pdf_file']['name'])) {
                    // If the ‘pdf_file’ field has an attachment (from guide)
                    $file_name = $_FILES['pdf_file']['name'];
                    $file_tmp = $_FILES['pdf_file']['tmp_name'];

                    // Move the uploaded pdf file into the pdf folder
                    move_uploaded_file($file_tmp, './pdf/'.$file_name);
                    // Insert the submitted data from the form into the database
                    $insertquery =
                    "UPDATE projects SET titulo = '$titulo', autor1 = '$autor1', autor2 = '$autor2',
                    orientador = '$orientador', resumo = '$resumo',
                    abstract = '$abstract', ano = '$ano', professor1 = '$professor1',
                    professor2 = '$professor2', palavras_chave = '$palavras_chave',
                    keywords = '$keywords', unidade = '$unidade', filename = '$file_name'
                    WHERE id = '$id'";
                    // Execute insert query on database
                    $iquery = mysqli_query($con, $insertquery);

                    if ($iquery) {
                        ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Projeto alterado com sucesso!</strong>
                </div>
                <?php
                    }
                    // end success data submitted
                    else {
                        ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Erro.</strong> Atualização de dados falhou, tente novamente.
                </div>
                <?php
                    // end else failed try again
                    }
                    // end if isset pdf_file
                } else {
                    ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Erro!</strong> O arquivo enviado precisa ser em formato de PDF!
                </div>
                <?php
                }// end else failed file upload in pdf format
            }// end if isset submit
?>

                <!--Formulário de edição de projeto-->
                <div class="form-input py-2">
                    <div class="form-group">
                        <h5>Preencha os campos abaixo</h5>
                        <form method="post" enctype="multipart/form-data" id="projform">
                            <div class="form-input py-2">
                                <div class="form-group">
                                    <label>Nome do Projeto</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo"
                                        value="<?php echo $titulo ?>"
                                        placeholder="Nome do Projeto" required>
                                </div>
                                <label>Nome do Autor</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="autor1" id="autor1"
                                        value="<?php echo $autor1 ?>"
                                        placeholder="Nome do autor" required>
                                </div>
                                <!-- segundo autor é opcional-->
                                <label>Nome do Segundo Autor</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="autor2" id="autor2"
                                        value="<?php echo $autor2 ?>"
                                        placeholder="Nome do Autor, se houver">
                                </div>
                                <!-- banca são orientador + 1 a 2 professores opcionais-->
                                <label>Nome do Orientador</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="orientador" id="orientador"
                                        value="<?php echo $orientador ?>"
                                        placeholder="Nome do Orientador" required>
                                </div>
                                <label>Resumo</label>
                                <div class="form-group">
                                    <input class="form-control" name="resumo" id="resumo" placeholder=" resumo"
                                        value="<?php echo $resumo ?>"
                                        required>
                                </div>
                                <label>Abstract</label>
                                <div class=" form-group">
                                    <input type="text" class="form-control" name="abstract" id="abstract"
                                        value="<?php echo $abstract ?>"
                                        placeholder="abstract" required>
                                </div>
                                <label>Ano</label>
                                <div class="form-group">
                                    <input type="number" min="2000" max="2024" step="1" class="form-control" name="ano"
                                        id="ano" placeholder="ano"
                                        value="<?php echo $ano ?>"
                                        required onKeyDown="return false">
                                </div>
                                <label>Primeiro Professor da Banca</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="professor1" id="professor1"
                                        value="<?php echo $professor1 ?>"
                                        placeholder="Primeiro Professor da Banca, se houver">
                                </div>
                                <label>Segundo Professor da Banca</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="professor2" id="professor2"
                                        value="<?php echo $professor2 ?>"
                                        placeholder="Segundo Professor da Banca, se houver">
                                </div>
                                <label>Palavras-Chave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="palavras_chave" id="palavras_chave"
                                        value="<?php echo $palavras_chave ?>"
                                        placeholder="Palavras-Chave" required>
                                </div>
                                <label>Keywords</label>
                                <div class="form-group">
                                    <input class="form-control" name="keywords" id="keywords" placeholder="Keywords"
                                        value="<?php echo $keywords ?>"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Unidade</label>
                                    <select class="form-control" name="Unidade" id="Unidade" required>
                                        <option value="Rio_de_Janeiro">
                                            Rio de Janeiro
                                        </option>
                                    </select>
                                </div>
                                <label>Arquivo em formato PDF</label>
                                <div class="form-group">
                                    <input type="file" name="pdf_file" id="pdf_file" class="form-control"
                                        accept=".pdf" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnRegister" name="update" id="update"
                                        value="Alterar Projeto">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

    <!-- grid do footer -->
    <?php include_once 'footer.php'; ?>
</body>

</html>