<?php

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: login.php?login=erro2');
}
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarProjeto.php') {
    header('Location: logadoadmin.php?');
}
if ($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarProjetos.php') {
    header('Location: logadoadmin.php?');
}
if ($_SESSION['perfil_id'] == '2' && $_SERVER['REQUEST_URI'] == '/TCC-1/repositorio_tcc/cadastrarUsuario.php') {
    header('Location: logadoBibliotecario.php?');
}
