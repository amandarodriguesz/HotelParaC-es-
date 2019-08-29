<?php
  include_once "funcao.php";

  $id = $_GET['id'];
  $usuario = obterUsuarioById($id);

  include_once "usuarioCreate.php";
 ?>
