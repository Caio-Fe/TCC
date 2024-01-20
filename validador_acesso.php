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
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: login.php?login=erro2');
}
// se a variavel de sessao 'perfil_id' for igual a 1 (adm)
// e a url for uma página de bibliotecário, redireciona para a pagina de admin
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarProjeto.php') {
    header('Location: logadoAdmin.php?');
}
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/logadoBibliotecario.php') {
    header('Location: logadoAdmin.php?');
}
// se a variavel de sessao 'perfil_id' for igual a 2 (bibliotecario)
// e a url for uma página de admin, redireciona para a pagina de bibliotecario
if ($_SESSION['perfil_id'] == '2' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarUsuario.php') {
    header('Location: logadoBibliotecario.php?');
}
if ($_SESSION['perfil_id'] == '2' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/logadoAdmin.php') {
    header('Location: logadoBibliotecario.php?');
}
