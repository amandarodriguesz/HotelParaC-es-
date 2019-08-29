<?php
  include_once "funcao.php";

  $id = $_GET['id'];
  $pet = obterPetById($id);
  include_once "petCreate.php";
 ?>
