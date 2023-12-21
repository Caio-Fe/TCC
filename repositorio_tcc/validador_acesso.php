<?php
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: login.php?login=erro2');
  }
  if($_SESSION['perfil_id'] == '1' && $_SERVER['REQUEST_URI'] == "/cadastrarProjeto.php"){
    header('Location: logadoadmin.php?');
  }
  if($_SESSION['perfil_id'] == '2' && $_SERVER['REQUEST_URI'] == "/cadastrarUsuario.php"){
    header('Location: logadobibliotecario.php?');
  }
?>