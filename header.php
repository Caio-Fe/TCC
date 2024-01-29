<div>
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed" style="background-color: #435281;width:100%;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/images.jpeg" alt="FAETERJ-Rio" width="300" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <!-- Itens da navegação -->
                <ul class="navbar-nav gap-lg-5" style="padding-left:20%">
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn" href="index.php">Início</a>
                    </li>
                    <li>
                        <a href="resultadoBusca.php">
                            <button class="btn btn-outline-light">Buscar</button>
                        </a>
                    </li>
                    <?php if(!isset($_SESSION['autenticado'])) {?>
                    <li class="nav-item ">
                        <a class="btn btn-primary" href="login.php">Login</a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item" style="color:#fff">
                        Usuário Logado:
                        <?php echo $_SESSION['email']?>
                    </li>
                    <li class="nav-item" style="padding-right: 15%">
                        <a class="btn btn-danger" href="logout.php">Sair</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</div>