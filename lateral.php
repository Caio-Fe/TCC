<div class="row">
    <div class="col-sm-2 ">
        <!--Menu Lateral-->
        <div style=" display:inline-block; margin-top: 200px;border-radius: 15px;
            background-color: #435281;" class="position-fixed">
            <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 200px;
                margin-top:10px; margin-bottom:10px;height: 90%;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="ano.php" class="nav-link link-dark bg-light" style="color:#435281">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="bootstrap-icons.svg#calendar" />
                            </svg>Ano
                        </a>
                    </li>
                    <li>
                        <a href="orientador.php" class="nav-link link-dark bg-light"
                            style="margin-top:2px; color:#435281;">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="bootstrap-icons.svg#mortarboard-fill" />
                            </svg>Orientador
                        </a>
                    </li>
                    <!-- bloated code palavras-chave não escala legal
                    <li>
                        <a href="palavrachave.php" class="nav-link link-dark bg-light"
                            style="margin-top:2px;color:#435281;">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="bootstrap-icons.svg#key" />
                            </svg>Palavra-Chave
                        </a>
                    </li>
-->
                    <?php if(isset($_SESSION['autenticado'])) {
                        if ($_SESSION['perfil_id'] == '1') {?>
                    <li>
                        <a href="cadastrarUsuario.php" class="nav-link link-dark bg-light"
                            style="margin-top:2px; color:#435281;">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="bootstrap-icons.svg#person-add" />
                            </svg>Cadastrar Usuario
                        </a>
                    </li>
                    <?php } if ($_SESSION['perfil_id'] == '2') {?>
                    <li>
                        <a href="cadastrarProjeto.php" class="nav-link link-dark bg-light"
                            style="margin-top:2px; color:#435281;">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="bootstrap-icons.svg#file-earmark-plus" />
                            </svg>Cadastrar Projeto
                        </a>
                    </li>
                    <?php }
                    }?>
                </ul>
            </div>
        </div>
    </div>
</div>