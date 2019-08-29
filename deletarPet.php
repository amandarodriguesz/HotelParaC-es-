<?php
  include_once "funcao.php";
  $id = $_GET['id'];
  removerPet($id);
  header("location: petIndex.php");
  exit();
 ?>
