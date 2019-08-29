<?php
  include_once "funcao.php";
  $tutor = array();
  $tutor['id'] = $_POST['id'];
  $tutor['cpf'] = $_POST['cpf'];
  $tutor['nome'] = $_POST['nome'];
    $tutor['telefone'] = $_POST['telefone'];
    $tutor['endereco'] = $_POST['endereco'];
    $tutor['instagram'] = $_POST['instagram'];
    $tutor['facebook'] = $_POST['facebook'];
    
  if ($tutor['id'] == 0) {
    salvarNovoTutor($tutor);
  } else {
    alterarTutor($tutor);
  }

  header("location: tutorIndex.php");
  exit();

 ?>