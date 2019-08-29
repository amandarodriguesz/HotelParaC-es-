<?php
  include_once "funcao.php";
  $tipoUsuario = array();
  $tipoUsuario['id'] = $_POST['id'];
  $tipoUsuario['descricao'] = $_POST['descricao'];
  if ($tipoUsuario['id'] == 0) {
    salvarNovoTipoUsuario($tipoUsuario);
  } else {
    alterarTipoUsuario($tipoUsuario);
  }

  header("location: tipoUsuarioIndex.php");
  exit();

 ?>
