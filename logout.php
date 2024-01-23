<?php

session_start();

unset($_SESSION['autenticado']); // remove a autenticacao da sessao
unset($_SESSION['id']); // remove o id da sessao
unset($_SESSION['perfil_id']); // remove o perfil_id da sessao
unset($_SESSION['email']); // remove o email da sessao

session_destroy(); // destroi a sessao
header('Location: index.php'); // redireciona para a pagina principal
