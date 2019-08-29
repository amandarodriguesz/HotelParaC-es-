<?php
  include_once "funcao.php";
  $id = $_GET['id'];
  removerTipoUsuario($id);
  header("location: tipoUsuarioIndex.php");
  exit();
 ?>
