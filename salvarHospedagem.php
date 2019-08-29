<?php
  include_once "funcao.php";

    $hospedagem = array();
    $hospedagem['id'] = $_POST['id'];
    
    $hospedagem['entrada'] = $_POST['entrada'];
    $hospedagem['saida'] = $_POST['saida'];
    $hospedagem['valor_diaria'] = $_POST['valor_diaria'];
    $hospedagem['observacoes'] = $_POST['observacoes'];
    $hospedagem['id_pet'] = $_POST['id_pet'];
  if ($hospedagem['id'] == 0) {
    salvarNovaHospedagem($hospedagem);
  } else {
    alterarHospedagem($hospedagem);
  }

  header("location: hospedagemIndex.php");
  exit();

 ?>