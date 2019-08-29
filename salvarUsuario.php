<?php
  include_once "funcao.php";
  $usuario = array();
  $usuario['id'] = $_POST['id'];
  $usuario['nome'] = $_POST['nome'];
  $usuario['senha'] = $_POST['senha'];
  $usuario['email'] = $_POST['email'];
  $usuario['id_tipo_usuario'] = $_POST['id_tipo_usuario'];
    
  if ($usuario['id'] == 0) {
    salvarNovoUsuario($usuario);
  } else {
    alterarUsuario($usuario);
  }

  header("location: UsuarioIndex.php");
  exit();

 ?>

