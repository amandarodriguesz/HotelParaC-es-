<?php

  include_once "funcao.php";

  $destino = 'img/' . $_FILES['foto']['name'];
  
  $arquivo_tmp = $_FILES['foto']['tmp_name'];
  
  move_uploaded_file( $arquivo_tmp, $destino  );
  


  $pet = array();
    $pet['id'] = 0;
    $pet['nome'] = $_POST['nome'];
    $pet['raca'] = $_POST['raca'];
    $pet['peso'] = $_POST['peso'];
    $pet['foto'] = $destino;
    
  if ($tutor['id'] == 0) {
    salvarNovoPet($pet);
  } else {
    alterarPet($pet);
  }

  header("location: petIndex.php");
  exit();

 ?>