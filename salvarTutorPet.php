<?php
  include_once "funcao.php";

    $hospedagem = array();
    
    $hospedagem['id_tutor'] = $_POST['id_tutor'];
    $hospedagem['id_pet'] = $_POST['id_pet'];

    salvarTutorPet($hospedagem);


  header("location: tutorIndex.php");
  exit();

 ?>