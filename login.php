<?php session_start();

if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == 'SIM') {
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

    <title>Repositório: Login</title>
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
        <div class="container" style=" background-color: #435281;
    text-align: center;margin-left:60% ;margin-right:30%;margin-bottom:25%;margin-top:3%;
    border:solid 1px;">

            <div style="margin: 20px;">
                <div class="card-login">
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="valida_login.php" method="post">
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input name="senha" id="senha" type="password" class="form-control"
                                        placeholder="Senha">
                                </div>

                                <?php
                // if user login fails
                if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>

                                <?php } ?>

                                <?php
                // if visitor tries to access a restricted page without logging in
                if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                    unset($_SESSION['autenticado']);
                    unset($_SESSION['id']);
                    unset($_SESSION['perfil_id']);
                    unset($_SESSION['email']); ?>

                                <div class="text-danger">
                                    Faça login antes de acessar as páginas protegidas
                                </div>

                                <?php } ?>

                                <button class="btn btn-md btn-info btn-block" type="submit">Entrar</button>
                            </form>
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