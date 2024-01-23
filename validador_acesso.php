<?php

session_start();

/* -------------------------------------------------------------------------- */
/*          Redireciona o usuário para a página de login de admin
            ou bibliotecario ou página inicial caso tente acessar
            uma página que não tem permissão
*/
/* -------------------------------------------------------------------------- */

// se a variavel de sessao 'autenticado' nao estiver setada ou for diferente de 'SIM',
// redireciona para a pagina de login
// destroi a sessao se houver vestígios de uma sessao anterior
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    unset($_SESSION['autenticado']);
    unset($_SESSION['id']);
    unset($_SESSION['perfil_id']);
    unset($_SESSION['email']);
    header('Location: login.php?login=erro2');
}
// se a variavel de sessao 'perfil_id' for igual a 1 (adm)
// e a url for uma página de bibliotecário,
// redireciona para a pagina inicial de admin
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC/cadastrarProjeto.php') {
    header('Location: index.php?');
}
// se a variavel de sessao 'perfil_id' for igual a 2 (bibliotecario)
// e a url for uma página de admin,
// redireciona para a pagina inicial de bibliotecario
if ($_SESSION['perfil_id'] == '2' && $_SERVER['REQUEST_URI'] == '/TCC/cadastrarUsuario.php') {
    header('Location: index.php?');
}
