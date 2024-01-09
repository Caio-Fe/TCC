<?php

session_start();

/* -------------------------------------------------------------------------- */
/*            Redireciona o usuário para a página de login de admin
        ou bibliotecario ou página inicial caso tente acessar uma página que não tem permissão
*/
/* -------------------------------------------------------------------------- */

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: login.php?login=erro2');
}
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarProjeto.php') {
    header('Location: logadoAdmin.php?');
}
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarProjetos.php') {
    header('Location: logadoAdmin.php?');
}
if ($_SESSION['perfil_id'] == '2' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarUsuario.php') {
    header('Location: logadoBibliotecario.php?');
}
