<?php
// verify if user is logged with profile admin
include_once 'validador_acesso.php';
include_once 'dbcon.php';

// verify if form was submitted
if (isset($_POST['submit'])) {
    // get values from form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $perfil_id = $_POST['perfil_id'];
    //verify if this email is already registered
    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $result = mysqli_query(
        $con,
        $sql
    ); // execute query
    $resultCheck = mysqli_num_rows($result); // verifica rows da query
    if ($resultCheck > 0) {
        header('Location: listarUsuarios.php?error=emailexistente');
    } else {
        // insert query on database
        $sql = "INSERT INTO users(email, password, perfil_id)
            VALUES ('$email', '$password', '$perfil_id')";
        $result = mysqli_query(
            $con,
            $sql
        );
    }
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

    <title>Repositório: Cadastrar Usuario</title>
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
            <!--Grid do counteudo 1-->
            <div class="row" style="padding:20px">
                <div class="bg-white col">
                    <!--Usuario - email || senha || tipo de usuario-->
                    <h5>Preencha os campos abaixo</h5>
                    <form action="cadastrarUsuario.php" method="POST">
                        <div class="py-2 form-input">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Senha" required>
                            </div>
                            <label>Tipo de Usuario</label>
                            <select name="perfil_id" id="perfil_id" default="Bibliotecario">
                                <option value="2">Bibliotecario</option>
                                <option value="1">Administrador</option>
                            </select>
                            <br>
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btnRegister" name="submit" id="submit"
                                    value="Cadastrar Usuario">
                                <input type="reset" class="btnRegister" name="reset" value="Limpar Campos">
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