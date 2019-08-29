<?php
  include_once "funcao.php";

  $id = $_GET['id'];
  $tipoUsuario = obterTipoUsuarioById($id);

  include_once "tipoUsuarioCreate.php";
 ?>
